# Extração de texto de uma imagem
## Tecnologias usadas
<p align="left">
      <ul>
        <li>Laravel 7</li>
        <li>Google vision API</li>
     </ul>
</p>

## Instruções de uso (Windows)
<p align="left">
    <ul>
        <li>Dentro da pasta onde o projeto foi clonado:
            <ul>
                <li>Criar uma pasta chamada key dentro da pasta public. </li>
                <li>Colar o arquivo key.json dentro da pasta criada.</li>
            </ul>
         </li>
        <li>Abrir o terminal e ir até a pasta onde o projeto foi clonado.</li>
        <li>Executar o comando "composer install".</li>
        <li>Executar o comando "copy .env.example .env".</li>
        <li>Executar o comando "php artisan key:generate".</li>
        <li>Criar uma conexão mysql com os seguintes dados:
            <ul>
                <li>Username: root</li>
                <li>Password:</li>
                <li>Host: 127.0.0.1</li>
                <li>Port=3306</li>             
            </ul>
        </li>
        <li>Criar uma database chamada "laravel".</li>
        <li>Executar o comando "php artisan migrate".</li>
        <li>Executar o comando "php artisan serve".</li>
     </ul>
</p>

