from flask import send_from_directory

@app.route('/main/upload')

def download(filename):

	return send_from_directory(directory='main',filename=filename)
