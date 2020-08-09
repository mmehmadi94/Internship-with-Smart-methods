# Social Distancing Application using APPInventor


This application helps you in practising social distancing to avoid infected with the virus. Where the application will notify you if someone enter your zone.

The application uses Bluetooth LE, to scan nearby devices, and with RSSI, you can know how this device is close to you if a device enters your 1.5 meter parameter, the application will push alert to keep distance and show you a message.

> RSSI stands for Received Signal Strength Indicator is a measurement of the power present in a received radio signal.

## Calculation the distance from the RSSI value of the Bluetooth LE

We can calculate the estimated distance between my device and others using RSSI.

Formula
```
Distance = 10 ^ ((Measured Power – RSSI)/(10 * N))
```
where Measured Power is also known as the 1 Meter RSSI.


So, if the application detect a device with RSSI is less than (-73) will notify you to keep 1.5 metres away

```
Distance for RSSI -73 = 10 ^ ((-69 – (-73))/(10 * 2)) = 1.5 meter
```
