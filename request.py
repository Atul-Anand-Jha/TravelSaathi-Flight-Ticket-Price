import requests
import json

url = 'http://127.0.0.1:5000/api/'

data = [[3,1,15,43,12,20,21,4,0,1,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,1,0,0,0,1]]
j_data = json.dumps(data)
headers = {'content-type': 'application/json', 'Accept-Charset': 'UTF-8'}
r = requests.post(url, data=j_data, headers=headers)
print(r, r.text)
