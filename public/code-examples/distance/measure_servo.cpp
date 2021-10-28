#include "Servo.h"
Servo myservo;

int positions[] = { 0, 30, 60, 90, 120, 150, 180 };
int pos_num = 7;
int pos = 0;

const int trigPin = 2;
const int echoPin = 4;

void setup()
{
    Serial.begin(9600);
    myservo.attach(9);
    pinMode(trigPin, OUTPUT);
    pinMode(echoPin, INPUT);
}

void loop()
{
    myservo.write( positions[pos] );
    pos++;
    if( pos == pos_num ) pos = 0;

    digitalWrite(trigPin, LOW);
    delayMicroseconds(2);
    digitalWrite(trigPin, HIGH);
    delayMicroseconds(10);
    digitalWrite(trigPin, LOW);
    Serial.print( pulseIn(echoPin, HIGH) / 29 / 2 );
    Serial.print("cm");
    Serial.println();
    delay(500);
}