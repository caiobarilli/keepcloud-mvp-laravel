**Teste de Habilidades em Laravel com MySQL, Blade, CRUD de Sócios e Integração com ViaCEP**

**Objetivo:**
Avaliar as habilidades do candidato em Laravel, compreensão e análise de requisitos, capacidade de inovação, determinação na busca de soluções e responsabilidade na tomada de decisões.

**Requisitos:**
1. Criar um sistema CRUD para gerenciar cadastros de sócios.
2. Cada sócio deve ter informações como nome, tipo de sócio (silver ou gold) e endereço.
3. O endereço deve ser preenchido automaticamente via integração com a API do ViaCEP (https://viacep.com.br/).
4. (opcional) Utilizar Livewire 3 para tornar a interface mais dinâmica e interativa.
5. Implementar um sistema de autenticação para acesso ao CRUD.
6. Utilizar o sistema de templates Blade para renderizar as views.

**Etapas:**

1. **Configuração Inicial:**
   - Inicialize um projeto Laravel usando a versão mais recente.
   - Configure o banco de dados MySQL para armazenar as informações dos sócios.

2. **Sistema de Autenticação:**
   - Utilize o Laravel para implementar um sistema de autenticação.
   - Crie as páginas de login e registro.
   - Restrinja o acesso ao CRUD apenas para usuários autenticados.

3. **CRUD de Sócios:**
   - Crie um modelo (Model) e uma migração para os sócios.
   - Implemente as rotas, controladores (Controllers) e as views necessárias para o CRUD.
   - (opcional) Utilize Livewire 3 para tornar a interface mais dinâmica.

4. **Integração com ViaCEP:**
   - Implemente a integração com a API do ViaCEP para preenchimento automático do endereço.
   - Ao cadastrar um novo sócio, faça uma requisição à API do ViaCEP para obter os dados de endereço.

5. **Template Blade e Livewire:**
   - Utilize o sistema de templates Blade para criar as views necessárias.
   - (Opcional) Integre o Livewire 3 para atualização dinâmica da interface durante o preenchimento do endereço.

6. **Inovação:**
   - Demonstre sua capacidade de inovação ao implementar funcionalidades adicionais que agreguem valor ao projeto (ex: validações, notificações, etc.).

7. **Testes:**
   - Realize testes unitários para verificar a robustez do sistema.
   - Certifique-se de que o sistema de autenticação, o CRUD e a integração com o ViaCEP estão funcionando corretamente.

8. **Documentação:**
   - Documente seu código de forma clara e concisa.

**Avaliação:**
O candidato será avaliado com base na implementação correta dos requisitos, a qualidade do código, a inovação apresentada e a capacidade de resolução de problemas. A documentação e os testes também serão considerados na avaliação.

**Observações:**
- Utilize as melhores práticas do Laravel.
- O projeto deve ser entregue em um repositório Git público.

Boa sorte!
