import os,time,sys
red = '\033[31m'
g = '\033[32m'
os.system("clear")
auth = """{} Python Console ~ Text Animation{}
  ____  _            _      _____  _     _     _     
 |  _ \| |          | |    |  __ \| |   (_)   | |    
 | |_) | | __ _  ___| | __ | |__) | |__  _ ___| |__  
 |  _ <| |/ _` |/ __| |/ / |  ___/| '_ \| / __| '_ \ 
 | |_) | | (_| | (__|   <  | |    | | | | \__ \ | | |
 |____/|_|\__,_|\___|_|\_\ |_|    |_| |_|_|___/_| |_|
                       ______                        
                      |______|                      
        
    		   Version: 1.1.3

   {} We Don’t Responsible For Any illegal Activists {}
    """.format(red,g,red,g)
for i in auth:
	print(i,end="")
	time.sleep(0.0095)
	sys.stdout.flush()
print(g)
text = "Hello Friends, It's me Black_Phish From Ummah Cyber Mujahideen. This is The Demo Of Python Cosole Animation. Thanks For Watching. Download link on description.."
count = len(text)
list = []
for i in range(count):
    time.sleep(0.10)
    sys.stdout.write(text[i])
    sys.stdout.flush()
print()
print()
