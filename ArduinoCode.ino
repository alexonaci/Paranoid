//House monitoring framework with Arduino and Raspberry Pi
//Cezar Chirila  
//AllAboutCircuits.com
//epilepsynerd.wordpress.com

#include "ArduinoJson.h"
#include <dht.h>

dht DHT; //give name to your DHT sensor

#define DHT11_PIN A0 //Pin for DHT11 data
#define LED_PIN A1 //PIN for LED

void setup()
{
  Serial.begin(9600);
}

void loop()
{
  String str;
  str = Serial.readString(); //Read serial
  str.toLowerCase(); //Convert to lowercase
  if (str == "thl")
    do
    {
      str = Serial.readString(); //Read the serial again
      send_data(); //Call send data function
    } while (str != "ok"); //Continue to send data until we receive an "ok"
  if (str == "led") {
    digitalWrite(LED_PIN, HIGH);   // turn the LED on (HIGH is the voltage level)
    delay(1000);                   // wait for a second
    digitalWrite(LED_PIN, LOW);    // turn the LED off by making the voltage LOW
  }

}
void  send_data()
{
  StaticJsonBuffer<200> jsonBuffer;
  JsonObject& root = jsonBuffer.createObject();
  root["temp"] = get_temperature();
  root["humidity"] = get_humidity();
  root.printTo(Serial);
  Serial.println();
}

int get_temperature() // function that return the temperature as an integer
{
  int temperature;

  DHT.read11(DHT11_PIN);
  temperature = DHT.temperature;
  return (temperature);
}

int get_humidity() //function that return the temperature as an integer
{
  int humidity;

  DHT.read11(DHT11_PIN);
  humidity = DHT.humidity;
  return (humidity);
}

