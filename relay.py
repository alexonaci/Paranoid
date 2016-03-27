#! /usr/bin/env python
from time import sleep
from serial import Serial
serial_port = '/dev/ttyACM0';
serial_bauds = 9600;
s = Serial(serial_port, serial_bauds);
sleep(2);
s.write('R');
