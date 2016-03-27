from serial import Serial
from time import sleep
import sqlite3

serial_port = '/dev/ttyACM0';
serial_bauds = 9600;

# store the temperature in the database
def log_light(value):

    conn=sqlite3.connect('/var/www/hackaton/arduino.db')
    curs=conn.cursor()

    curs.execute("UPDATE sensor1 set status = (?)", (value,))

    # commit the changes
    conn.commit()

    conn.close()

def main():
	s = Serial(serial_port, serial_bauds);
	s.write('T');
	sleep(0.05);
	line = s.readline();
	temperature = line;
	s.write('H');
	sleep(0.05);
	line = s.readline();
	humidity = line;
	s.write('L');
	sleep(0.05);
	line = s.readline();
	light = line;
	log_light(light);

	if __name__=="__main__":
		main()
