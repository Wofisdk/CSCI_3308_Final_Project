from pygame import *

gPlatformWidth = 32
gPlatformHeight = 32
gPlatformDisplay = (gPlatformWidth,gPlatformHeight)
gPlatformColor = "#FF6262"

class Platform(sprite.Sprite):
    def __init__(self,x,y):
        sprite.Sprite.__init__(self)
        self.image = Surface(gPlatformDisplay)
        self.image.fill(Color(gPlatformColor))
        self.rect = Rect(x,y,gPlatformWidth,gPlatformHeight)
        
