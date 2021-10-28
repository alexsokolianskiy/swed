#define	BLACK   0x0000
#define	BLUE    0x001F
#define	RED     0xF800
#define	GREEN   0x07E0

#include "SPI.h"
#include "Adafruit_GFX.h"
#include "MCUFRIEND_kbv.h"

MCUFRIEND_kbv tft;

void setup() {    
    uint16_t ID = tft.readID();
    if (ID == 0xD3D3) 
        ID = 0x9481;
    tft.begin(ID);
}

void loop() {
    drawRect(GREEN);
    delay(2000);
    
    drawFilledRect(RED);
    delay(2000);
    
    drawRoundedRect(BLUE);
    delay(2000);
    
    drawFilledRoundedRect(BLUE);
    delay(2000);
}

void drawRect(uint16_t color) {
    tft.fillScreen(BLACK);
    float cx, cy;
    cx = tft.width()  / 2,
    cy = tft.height() / 2;
    tft.drawRect(cx, cy, cx/2, cy/2, color);
}


void drawFilledRect(uint16_t color) {
    tft.fillScreen(BLACK);
    float cx, cy;
    cx = tft.width()  / 2,
    cy = tft.height() / 2;
    tft.fillRect(cx, cy, cx/2, cy/2, color);
}

void drawRoundedRect(uint16_t color) {
    tft.fillScreen(BLACK);
    float cx, cy;
    cx = tft.width()  / 4,
    cy = tft.height() / 4;
    tft.drawRoundRect(cx, cy, cx, cy, 10, color);
}

void drawFilledRoundedRect(uint16_t color) {
    tft.fillScreen(BLACK);
    float cx, cy;
    cx = tft.width()  / 4,
    cy = tft.height() / 4;
    tft.fillRoundRect(cx, cy, cx, cy, 10, color);
}
