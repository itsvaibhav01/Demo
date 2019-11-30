from flask import Flask
from flask_restful import Resource, Api

import time
app = Flask(__name__)
api = Api(app)
oldt = 0

class Product(Resource):
    def get(self):
        global oldt
        ticks = time.time()
        d = ticks - oldt
        oldt = ticks
        return {
            'products': [str(oldt),str(ticks),str(d)]
        }


api.add_resource(Product, '/')

app.run(host='0.0.0.0', port=80, debug=True)
