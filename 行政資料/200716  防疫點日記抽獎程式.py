import csv
import random

draw=[]
with open("C:/Users/USER/Desktop/draw.csv") as csvfile:
    rows=csv.reader(csvfile)
    for row in rows:
        i=0
        for i in range(int(row[1])):
            draw.append(row[0])
random.seed(242)

winning=[]
for j in range(3):
    lucky_number=draw[random.randint(0,len(draw)-1)]
    if lucky_number not in winning:
        winning.append(lucky_number)

print("第一獎中獎人:id#", winning[0])
print("第二獎中獎人:id#", winning[1])
print("第三獎中獎人:id#", winning[2])
