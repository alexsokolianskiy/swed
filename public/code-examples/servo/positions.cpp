#include "Servo.h" 
Servo myservo;
int pos = 0;

void setup() 
{ 
    myservo.attach(9);
} 

void loop() 
{                             
    if(0 == pos) pos = 120;
       else pos = 0;
    myservo.write(pos);
    delay(2000); 
}
