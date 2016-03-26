/*
 * SmartHome
 * 
 * 
 */

#include <IRremote.h>

#include <dht.h>
#define CDS_INPUT 0
#define DHT11_PIN 2
#define DARK 200
#define RELAY 4

dht DHT;
IRsend irsend;

void setup() 
{
  Serial.begin(9600);
  pinMode(RELAY, OUTPUT);
  digitalWrite(RELAY, LOW);
}

int relay_status = 1;

void loop() 
{
  String str;

  str = Serial.readString();
  if (str == "T")
    get_temperature();
  else if (str == "H")
    get_humidity();
  else if (str == "L")
    get_brightness();
  else if (str == "TV")
  {
    irsend.sendSony(0xFE50AF, 32);
    delay(500);
  }
  else if (str == "R")
  {
    if (relay_status)
      digitalWrite(RELAY,HIGH);
    else
      digitalWrite(RELAY,LOW);
    relay_status = !relay_status;
  }
  
  delay(1000);
}

void  get_brightness()
{
  int light = analogRead(CDS_INPUT);

  if (light > DARK)
    light = 1;
  else
    light = 0;

  Serial.print(light);
  Serial.println(); 
}

void  get_temperature()
{
  int temperature;
  
  DHT.read11(DHT11_PIN);
  temperature = DHT.temperature;
  Serial.print(temperature);
  Serial.println();
}

void  get_humidity()
{
  int humidity;
  
  DHT.read11(DHT11_PIN);
  humidity = DHT.humidity;
  Serial.print(humidity);
  Serial.println();  
}
