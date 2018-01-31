#!/usr/bin/env python3
import requests
from bs4 import BeautifulSoup
import json
import codecs
import time
import re

session=requests.Session()
argv={'sn':'140190604627','password':'(imp@h01)'}
url='https://b.oray.com/passport/login'
r=session.post(url,data=argv)
url='https://b.oray.com/forward/'
r=session.get(url)
bsobj=BeautifulSoup(r.text,'html.parser')
js={}
js['flow']=bsobj.find_all('span',{'class':'num'})[1].get_text()
web=(bsobj.find_all('td',{'align':'left'})[1].get_text(),
     bsobj.find_all('td',{'align':'left'})[2].get_text())

msg=[]
for i in bsobj.find_all('td',{'align':'center'}):
    msg.append(i.get_text())
js[msg[0]]=(web[0],msg[2])
js[msg[3]]=(web[1],msg[5])

now_time = time.localtime(time.time())
js['time']=time.strftime('%m-%d %H:%M', now_time)

with codecs.open('result.json','w','utf-8') as f:
    f.write(json.dumps(js,ensure_ascii=False))
