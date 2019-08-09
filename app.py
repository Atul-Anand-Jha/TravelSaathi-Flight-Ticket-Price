from flask import Flask, request, redirect, url_for, flash, jsonify
import numpy as np
import pickle as p
import json


app = Flask(__name__)


@app.route('/api/', methods=['POST'])
def makecalc():
    data = request.get_json()
    prediction = np.array2string(model.predict(data))

    return jsonify(prediction)

if __name__ == '__main__':
    modelfile = 'models/final_model.pickle'
    model = p.load(open(modelfile, 'rb'))
    app.run(port=5000, debug=True, host='127.0.0.1')
    #firewall blocking 0.0.0.0:5000/

