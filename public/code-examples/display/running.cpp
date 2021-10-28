#include "Wire.h"
#include "LiquidCrystal_I2C.h"

LiquidCrystal_I2C lcd(0x27, 2, 1, 0, 4, 5, 6, 7, 3, POSITIVE);
int col_offset = 0;
int row_offset = 0;

void setup(){
    lcd.begin(16,2);
    lcd.backlight();
    }

void loop(){
    lcd.setCursor(col_offset, row_offset);
    lcd.print("Running text");
    delay(100);
    lcd.clear();
    col_offset = (col_offset + 1) % 16;
    if(15 == col_offset) row_offset = (row_offset + 1) % 2;
}
