from flask import Flask, request, jsonify
import tensorflow as tf
import cv2
import numpy as np

app = Flask(__name__)

# Load the model
model = tf.keras.models.load_model('CNN_model.h5')

def preprocess_image(image):
    image = cv2.resize(image, (50, 50))  # Ubah ukuran gambar ke (50, 50)
    image = image / 255.0
    image = np.reshape(image, (1, 50, 50, 3))  # Ubah gambar menjadi bentuk yang sesuai (1, 50, 50, 3)
    return image

@app.route('/predict', methods=['POST'])
def predict():
    file = request.files['image']
    if not file:
        return jsonify({'error': 'No file provided'}), 400

    img = np.frombuffer(file.read(), np.uint8)
    img = cv2.imdecode(img, cv2.IMREAD_COLOR)
    processed_img = preprocess_image(img)
    prediction = model.predict(processed_img)
    predicted_class = np.argmax(prediction, axis=1)[0]

    return jsonify({'predicted_class': int(predicted_class)})

if __name__ == '__main__':
    app.run(debug=True, port=5000)
