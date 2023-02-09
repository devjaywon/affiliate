from  pyfirmata import Arduino, util
import time

if __name__ == '__main__';
board = Arduino('####')
    print('communicatipn established successfully')

# setting up digital pin

flow_sensor_pin = board.get_pin('d:2:i')

#wait for board to be ready
while not board.ready:
    time.sleep(0,1)

pulse_count = 0
start_time = time.time()
while True:
    if flow_sensor_pin.read() == 1:
        pulse_count += 1
    current_time = time.time()
    if current_time - start_time >= 1:
        flow_rate = pulse_count/(current_time - start_time)
        flow_rate_in_gallons_per_minute = flow_rate * (1/450) #conversion
        flow_rate_in_cubic_inches_per_minute = flow_rate_in_gallons_per_minute * 231
        flow_rate_in_psi = flow_rate_in_cubic_inches_per_minute / (0.01488 * 0.3048**2)
        print("Flow rate:" , flow_rate_in_psi)
        pulse_count = 0


        