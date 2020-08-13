<h1 align="center">Face Mask Detection | مراقب ارتداء الكمامة</h1>

Face Mask Detection system built with OpenCV, Keras/TensorFlow using Deep Learning and Computer Vision concepts in order to detect face masks in static images as well as in real-time video streams.


<p align="center"><img src="https://github.com/mmehmadi94/Internship-with-Smart-methods/blob/master/FaceMaskDetecton/images/mainUI.png" width="600" height="500"></p>
<p align="center"><img src="https://github.com/mmehmadi94/Internship-with-Smart-methods/blob/master/FaceMaskDetecton/images/resultImage.png" width="700" height="400"></p>


## :warning: Tech/framework used

- [OpenCV](https://opencv.org/)
- [Caffe-based face detector](https://caffe.berkeleyvision.org/)
- [Keras](https://keras.io/)
- [TensorFlow](https://www.tensorflow.org/)
- [MobileNetV2](https://arxiv.org/abs/1801.04381)


## :file_folder: Dataset

This dataset used consists of __3835 images__ belonging to two classes:
*	__with_mask: 1916 images__
*	__without_mask: 1930 images__

## Installation
1. Clone the repo
```
$ git clone https://github.com/chandrikadeb7/Face-Mask-Detection.git
```

2. Now, run the following command in your Terminal/Command Prompt to install the libraries required
```
$ pip3 install -r requirements.txt
```

## :bulb: Working

1. Open terminal. Go into the cloned project directory folder and type the following command:
```
$ python3 train_mask_detector.py --dataset dataset
```

2. Now detect the face masks in images
```
$ python3 detect_mask.py --image images/pic1.jpeg
```

3. Detection in real-time video streams
```
$ python3 detect_mask_video.py
```
