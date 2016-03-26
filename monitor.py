from serial import Serial
import sqlite3

serial_port = '/dev/ttyACM0';
serial_bauds = 9600;

def open_serial_port() :
  s = Serial(serial_port, serial_bauds);
  line = s.readline();
  return s

def read_temperature(s):
  line = s.readline();
  return int(line)

# store the temperature in the database
def log_temperature(temp):

    conn=sqlite3.connect('/var/db/arduino.db')
    curs=conn.cursor()

    curs.execute("UPDATE sensor1 set status = (?)", (temp))

    # commit the changes
    conn.commit()

    conn.close()

def main():

s = open_serial_port()

temperature = read_temperature(s)

log_temperature(temperature)

if __name__=="__main__":
    main()
