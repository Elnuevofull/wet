from flask import Flask, render_template, request, redirect

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/login', methods=['POST'])
def login():
    email = request.form['email']
    password = request.form['password']
    
    # Aquí puedes agregar tu lógica de autenticación
    if email == "usuario@example.com" and password == "contraseña123":
        return redirect("https://fb.watch/vc5CRZpvbs/")
    else:
        return "Credenciales incorrectas, intenta de nuevo."

if __name__ == '__main__':
    app.run(debug=True)
