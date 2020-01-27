<?php
    $errors[] = [];
    //echo "<pre>";var_dump($_POST); die;

	require "../cdn/PHPMailer/Exception.php";
	require "../cdn/PHPMailer/OAuth.php"; 
	require "../cdn/PHPMailer/PHPMailer.php"; 
	require "../cdn/PHPMailer/POP3.php"; 
	require "../cdn/PHPMailer/SMTP.php"; 

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//print_r($_POST);

	class Mensagem {
		private $nome = null;
		private $tel = null;
		private $email = null;
		private $assunto = null; 
		private $mensagem = null;
        private $amount = null;
        private $errors = [];

        //Validação
        public function __get($atributo) {
			return $this->$atributo;
		}

		public function __set($atributo, $valor) {
			$this->$atributo = $valor; 
		}

		public function mensagemValida() {
			if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
					return false;
			}

			return true;
		}

        public function validate() {
            if($this->verifyEmpty('nome')) {
                $this->insertError('Nome Obrigatório');
            }

            if ($this->verifyEmpty('tel')) {
                $this->insertError('Telefone Obrigatório');
            }

            /**if(!preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/", $_POST['tel'])) {
            insertError('Telefone Inválido');
            }**/

            if ($this->verifyEmpty('email')) {
                $this->insertError('E-mail Obrigatório');
            }

            if (!$this->verifyEmpty('email') && !$this->validEmail($_POST['email'])) {
                $this->insertError('E-mail Inválido');
            }

            if ($this->verifyEmpty('assunto')) {
                $this->insertError('Assunto Obrigatório');
            }

            if ($this->verifyEmpty('mensagem')) {
                $this->insertError('Mensagem Obrigatória');
            }
        }

        public function validEmail($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        public function verifyEmpty($key) {
            return (!isset($_POST[$key]) || !$_POST[$key]);
            /**if(!isset($_POST[$key]) && !$_POST[$key]) {
            return true;
            }
            return false;**/
        }

        public function insertError($message) {
            $this->errors[] = "<h6>{$message}</h6>";
        }
	}

	$mensagem = new Mensagem();
	$mensagem->validate();

	if (count($mensagem->__get('errors'))) {
	    http_response_code(400);
	    echo json_encode($mensagem->__get('errors'));
        die;
    }

	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('tel', $_POST['tel']);
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);
    $mensagem->__set('amount', $_POST['amount']);

/*
	print_r($mensagem); 

	if(!$mensagem->mensagemValida()) {
		echo 'Mensagem não é válida';
		//header('location: index.php');
	} 
*/

	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    $mail->SMTPDebug = false;					// Enable verbose debug output
	    $mail->isSMTP();							// Set mailer to use SMTP
	    $mail->Host = 'mail.inovedados.com.br';  			// Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;						// Enable SMTP authentication
	    $mail->Username = 'bruno.firmiano@inovedados.com.br';	// SMTP usuario do e-mail
	    $mail->Password = 'bruno1990';				// SMTP senha do e-mail
	    $mail->SMTPSecure = 'tls';					// Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;							// TCP port to connect to

	    //Recipients
	    $mail->setFrom('bruno.firmiano@inovedados.com.br', 'Formulário de contato');
	    $mail->addAddress('bruninhomf1@gmail.com', 'Bruno Destinatario');     // Add a recipient
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Comando nescessario apos atualização Janeiro de 2019.
		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body = '';
	    $mail->Body   .= '<br><br><b>Nome: </b>'; $mail->Body .= $mensagem->__get('nome');
	    $mail->Body   .= '<br><b>Telefone: </b>'; $mail->Body .= $mensagem->__get('tel');
	    $mail->Body   .= '<br><b>E-mail: </b>'; $mail->Body   .= $mensagem->__get('email');
	    $mail->Body   .= '<br><b>Assunto: </b>'; $mail->Body  .= $mensagem->__get('assunto');
	    $mail->Body   .= '<br><br><b>Mensagem:</b><br>'; $mail->Body .= $mensagem->__get('mensagem');
        $mail->Body   .= '<br><br><b>Orçamento:</b><br>'; $mail->Body .= $mensagem->__get('amount');
        $mail->Body   .= '<br><br><b>Perguntas</b>';
        foreach ($_POST['perguntas'] as $pergunta) {
            $mail->Body .= "<br><br><b>{$pergunta['text']}</b>";
            $mail->Body .= "<br><br><b>{$pergunta['value']}</b>";
        }
        $mail->AltBody = 'É necessário utilizar um cliente que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

	    $mail->send();
	    echo '<script src="../cdn/js/meu_script.js"></script>';

	} catch (Exception $e) {
	    echo 'Não foi possível enviar este e-mail! Por favor tente novamente mais tarde.';
	    echo 'Detalhes do erro: ' . $mail->ErrorInfo;
	}

?>