import RPi.GPIO as GPIO
import time

control = [5,6,7,8,9,10]
control2 = [5.5,6,5,7.5,8.5,9.5,10.5]

servo = 11

GPIO.setmode(GPIO.BOARD)

GPIO.setup(servo,GPIO.OUT)
# in servo motor,
# 1ms pulse for 0 degree (LEFT)
# 1.5ms pulse for 90 degree (MIDDLE)
# 2ms pulse for 180 degree (RIGHT)

# so for 50hz, one frequency is 20ms
# duty cycle for 0 degree = (1/20)*100 = 5%
# duty cycle for 90 degree = (1.5/20)*100 = 7.5%
# duty cycle for 180 degree = (2/20)*100 = 10%

p=GPIO.PWM(servo,50)# 50hz frequency

p.start(2.5)# starting duty cycle ( it set the servo to 0 degree )

squeezes = 0

p.ChangeDutyCycle(10)
time.sleep(0.2)
p.ChangeDutyCycle(9)
time.sleep(0.2)
p.ChangeDutyCycle(8)
time.sleep(0.2)
p.ChangeDutyCycle(7)
time.sleep(0.2)
p.ChangeDutyCycle(6)
time.sleep(0.2)
p.ChangeDutyCycle(5)
time.sleep(0.2)

time.sleep(1)

p.ChangeDutyCycle(5.5)
time.sleep(0.2)
p.ChangeDutyCycle(6.5)
time.sleep(0.2)
p.ChangeDutyCycle(7.5)
time.sleep(0.2)
p.ChangeDutyCycle(8.5)
time.sleep(0.2)
p.ChangeDutyCycle(9.5)
time.sleep(0.2)
p.ChangeDutyCycle(10.5)
time.sleep(0.2)

p.stop()
GPIO.cleanup()
