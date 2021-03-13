const int count = 3;
int states[count] = {1,1,1};
const int lPin = 2;
const int hPin = 4;
const int lAnalog = 0;
const int hAnalog = 3;
const int brokeCycle = 2;
const int restoreCycle = 5;
int cycle = 0;
void setup() {
 for (int thisPin =lPin; thisPin <= hPin+1; thisPin++)
 {
    pinMode(thisPin, OUTPUT);
 }
}
void loop() {
      if(cycle == restoreCycle)
       Restore();
    if(cycle == brokeCycle){
       Broke(0); // should be 0-2
       Broke(1);
     }
 for (int i = 0; i < count; i++  )
 {
    CheckBroke();
    Light(i);
   }
   cycle++;
 }
void Broke(int led){
   states[led] = 0;
}
void Restore(){
 for (int i =0 ;i < count; i++){
 states[i] = 1;}
 cycle = 0;
}
void CheckBroke(){
  for(int i = 0; i < count; i++){
    if(states[i] == 0){
      digitalWrite(hPin+1, HIGH);
      return;
    }
  }
  digitalWrite(hPin+1,LOW);
}
void Light(int led){
   if(states[led] != 0){
    digitalWrite(led+2, HIGH);
   }
   delay(700);
   digitalWrite(led+2, LOW);
}