# Face Recognition using Haar cascades in OpenCV and Python

OpenCV is the most popular library for computer vision. OpenCV uses machine learning algorithms to search for faces within a picture or a video, one of them is Haar cascades. It is a machine learning object detection algorithm trained with a set of input data.


You don't need to download the trained classifier XML file (haarcascade_frontalface_default.xml), which is available in OpenCv’s GitHub repository. You can use a property given by cv2 to import the haarcascade

```
face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
```

Important note to know, the detection works only on grayscale images. So it needs to convert image/video to grayscale before detection faces.

```
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
```


## Features
- Detection all faces in pictures

![result detection face](https://github.com/mmehmadi94/Internship-with-Smart-methods/blob/master/FaceDetaction_OpenCV/resultImage.png)

- Detection all faces in videos (either from webcam or video file)

![detection face from video file](https://github.com/mmehmadi94/Internship-with-Smart-methods/blob/master/FaceDetaction_OpenCV/resultVideo.gif)


## Installation


- First of all make sure you have Python 3.3+ or Python 2.7 installed.
- Then, install OpenCV from pypi using pip3 command (or pip2 for Python 2):

```
pip3 install opencv-python
```

