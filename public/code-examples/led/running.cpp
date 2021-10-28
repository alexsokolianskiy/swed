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
    delay(300);
  }
  for (int thisPin =lowestPin; thisPin <= highestPin; thisPin++) {
    analogWrite(thisPin, 0);
    delay(300);
  }
}
