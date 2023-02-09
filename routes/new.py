from  pyfirmata import Arduino, util
import time

if __name__ == '__main__';
board = Arduino('####')
    print('communicatipn established successfully')

# setting up digital pin

flow_sensor_pin = board.get_pin('d:2:i')
led_pin = board.get_pin('d:13:o')
low = int(10.0)


#uti iterator
it = pyfirmata.util.Iterator(board)
it.start()


while True:
    flow_value = flow_sensor_pin.read()
    if flow_value is not None:
        #conversion
        flow_rate_in_psi = (flow_value * 5.0) / 1024
        print("Flow rate:" , flow_rate_in_psi "PSI")
    time.sleep(1)    
#turn on any digital pin
if flow_rate_in_psi <= low:
    led_pin.write(1)

