#define	BLACK   0x0000
#define	BLUE    0x001F
#define	RED     0xF800
#define	GREEN   0x07E0

#include "SPI.h"
#include "Adafruit_GFX.h"
#include "MCUFRIEND_kbv.h"

MCUFRIEND_kbv tft;

void setup(void) {    
    uint16_t ID = tft.readID();
    if (ID == 0xD3D3) 
        ID = 0x9481;
    tft.begin(ID);
}

void loop() {
    tft.fillScreen(BLACK);
    tft.drawTriangle(
        100, 150, // peak
        0, 0, // bottom left
        200, 0, // bottom right
        RED //color
    );
    delay(5000);
    tft.fillScreen(BLACK);
    tft.fillTriangle(
        100, 150, // peak
        0, 0, // bottom left
        200, 0, // bottom right
        RED //color
    );
    delay(5000);
}


