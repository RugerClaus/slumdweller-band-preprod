const contactForm = document.getElementById('contactForm')

        contactForm.addEventListener('submit', (e) => {
            let messages = [];
                const name = document.querySelector('.name').value;
                const subject = document.querySelector('.subject').value;
                const message = document.querySelector('.message').value;
                const errorMessage = document.querySelector('.error');
                let regex = /[a-z0-9]+@+[a-z]+\.+[a-z]/gi;
                let result = regex.test(email);
                const appendError = () => {
                    errorMessage.style.display = 'none';
                }
                if(name.length<2){
                    e.preventDefault();
                    messages.push('Error, Form requires a name to send an email!')
                    errorMessage.style.display = 'block';
                    errorMessage.innerHTML = "Please enter a name with more than two characters!";
                    setTimeout(() => {
                        setTimeout(appendError)
                    }, 3000);
                }
                if(name.length>2 && result===false){
                    e.preventDefault();
                    messages.push('Error, Form requires the email of sender!')
                    errorMessage.style.display = 'block';
                    errorMessage.innerHTML = 'Please enter a valid email address!';
                    setTimeout(() => {
                        setTimeout(appendError)
                    }, 3000)
                }
                if(message.length < 5 && name.length>2&&result===true){
                    e.preventDefault()
                    messages.push('Error, Please enter a message!')
                    errorMessage.style.display = 'block';
                    errorMessage.style.backgroundColor = 'red'
                    errorMessage.innerHTML = 'Please enter a message!'
                    setTimeout(() => {
                        setTimeout(appendError)
                    }, 3000)
                }
                console.error(messages)
        })