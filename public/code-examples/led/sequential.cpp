const int lowestPin = 2;
const int highestPin = 5;


void setup() {
  for (int thisPin =lowestPin; thisPin <= highestPin; thisPin++) { 
    pinMode(thisPin, OUTPUT); 
  }
}

void loop() {
  for (int thisPin =lowestPin; thisPin <= highestPin; thisPin++) {
    analogWrite(thisPin, 255);
    delay(700);
    analogWrite(thisPin, 0);
  }
}