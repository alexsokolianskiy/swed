#include "Wire.h"
#include "LiquidCrystal_I2C.h"

LiquidCrystal_I2C lcd(0x27, 2, 1, 0, 4, 5, 6, 7, 3, POSITIVE);

void setup(){
    lcd.begin(16,2);
    lcd.backlight();
}

void loop(){
    lcd.setCursor(0,0);
    lcd.print("Hello, world!");
    delay(1000);
    lcd.setCursor(0,1);
    lcd.print("I am display");
    delay(1000);
    lcd.clear();
    delay(1000);
}