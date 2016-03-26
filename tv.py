from serial import Serial
serial_port = '/dev/ttyACM0';
serial_bauds = 9600;
s = Serial(serial_port, serial_bauds);
s.write('TV');
