# user_input = input("What is your name")

import cv2
import numpy as np
import matplotlib.pyplot as plt


face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')


pic = cv2.imread('test.jpg')
scale_factor = 1.3


while 1:
 faces= face_cascade.detectMultiScale(pic, scale_factor, 5)
 
 for (x, y, w, h) in faces:
  cv2.rectangle(pic, (x, y), (x +w, y + h), (255, 0, 0), 2)
  font = cv2.FONT_HERSHEY_SIMPLEX 
  cv2.putText (pic, 'Beckham', (x, y), font, 2, (255, 255, 255), 2, cv2.LINE_AA)

 print ("number of faces found {}".format (len(faces)))

 cv2.imshow('image',pic)
 cv2.waitKey(0)
 cv2.destroyAllWindow()
 k = cv2.waitkey(30) & 0xff

 if k == 2: 
 
  break



