
1. **Configuração Inicial:**
   - ✔️Inicialize um projeto Laravel usando a versão mais recente.  <br>
   🛑 Utilizando Laravel 10.10 🛑 <br><br>

   - ✔️Configure o banco de dados MySQL para armazenar as informações dos sócios. <br>
   🛑 Utilizando docker com a imagem "mysql/mysql-server:8.0" 🛑 <br><br>

2. **Sistema de Autenticação:**
   - ✔️Utilize o Laravel para implementar um sistema de autenticação. <br>
   🛑 Sistema implementado utilizando o [Jetstream](https://jetstream.laravel.com/introduction.html) 🛑 <br><br>
   - ✔️Crie as páginas de login e registro. <br>
   🛑 http://localhost:8000/register , http://localhost:8000/login ou http://localhost:8000/ 🛑 <br><br>
   - ✔️Restrinja o acesso ao CRUD apenas para usuários autenticados.  <br>
   🛑 http://localhost:8000/dashboard/members 🛑 <br><br>

3. **CRUD de Sócios:**
   - ✔️Crie um modelo (Model) e uma migração para os sócios. <br>
   🛑 http://localhost:8000/dashboard/members 🛑 <br> <br>
   - ✔️Implemente as rotas, controladores (Controllers) e as views necessárias para o CRUD. <br>
   🛑 http://localhost:8000/dashboard/members 🛑 <br> <br>
   - ✔️(opcional) Utilize Livewire 3 para tornar a interface mais dinâmica. <br>
   🛑 O app utiliza o Limewire 3  🛑 <br> <br>

4. **Integração com ViaCEP:**
   - ✔️Implemente a integração com a API do ViaCEP para preenchimento automático do endereço.
   🛑 Integração realizada 🛑 <br> <br>
   - ✔️Ao cadastrar um novo sócio, faça uma requisição à API do ViaCEP para obter os dados de endereço. <br>
   🛑 No cadastramento de um novo sócio, o endereço é preenchido automaticamente 🛑
 <br>
5. **Template Blade e Livewire:**
   - ✔️Utilize o sistema de templates Blade para criar as views necessárias.
   - ✔️(Opcional) Integre o Livewire 3 para atualização dinâmica da interface durante o preenchimento do endereço.

6. **Inovação:**
   - ✔️Demonstre sua capacidade de inovação ao implementar funcionalidades adicionais que agreguem valor ao projeto (ex: validações, notificações, etc.). <br>
   🛑 Foi implementado um sistema de notificações para o usuário,  validações de campos e um sistema de busca de sócios alem do ambiente configurado com docker foi habilitado recursos extras no Jetstream.🛑

7. **Testes:**
   - ✔️Realize testes unitários para verificar a robustez do sistema.<br>
   🛑 Foi implementado testes unitários para o CRUD de sócios🛑<br><br>
   - ✔️Certifique-se de que o sistema de autenticação, o CRUD e a integração com o ViaCEP estão funcionando corretamente.<br>
   🛑 O Projeto foi testado e está funcionando corretamente🛑<br><br>

8. **Documentação:**
   - ✔️Documente seu código de forma clara e concisa.