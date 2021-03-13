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
    tft.fillScreen(BLACK);
    tft.drawLine(0, 0, tft.width(), tft.height(), GREEN);
    delay(5000);
    tft.fillScreen(BLACK);
    tft.drawLine(0, tft.height(), tft.width(), 0, RED);
    delay(5000);
}

