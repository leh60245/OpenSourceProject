from flask import Flask, render_template,request
from app import secure_filename
app = Flask(__name__)

@app.route('/main')
def render_file():
  return render_template('index.html')
  
@app.route('/main ', methods = ['GET','POST'])
def upload_file():
  if request.method== 'POST':
    f = requests.files['file']
    f.save('home/dpfprtus/opensource/app/templates/main/upload/'+secure_filename(f.filename))
    return 'upload success'
if __name__ == '__main__':
  app.run(debug = True)
