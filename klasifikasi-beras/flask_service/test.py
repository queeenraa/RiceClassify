import tensorflow as tf

# Load model
model = tf.keras.models.load_model('CNN_model.h5')

# Print model summary to check input shape
model.summary()
