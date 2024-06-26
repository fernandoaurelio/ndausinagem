<div class="row g-3">
  <input type="email" class="form-control" placeholder="Seu E-mail" aria-label="email">
  <input type="text" class="form-control" placeholder="Seu Nome" aria-label="nome">
  <div class="col">
    <input type="text" class="form-control" placeholder="Telefone Comercial" aria-label="telefone">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Nome da Empresa" aria-label="empresa">
  </div>
  <div class="input-icone">
    <i class="fa-solid fa-chevron-down icon"></i>    
    <select id="servicos-usinagem" name="servicos-usinagem" class="form-control" placeholder="servicos" aria-label="Qual seu servicos">
      <option value="opcao1">Objetivo do Orçamento</option>
      <option value="torneamento">Torneamento</option>
      <option value="fresamento">Fresamento</option>
      <option value="retificacao">Retificação</option>
      <option value="furação">Furação</option>
      <option value="rosqueamento">Rosqueamento</option>
      <option value="corte">Corte</option>
      <option value="mandrilamento">Mandrilamento</option>
      <option value="usinagem-de-precisao">Usinagem de Precisão</option>
    </select>
  </div>    
  <div class="col">
    <div class="input-icone">
     <i class="fa-solid fa-chevron-down icon cargo"></i>
      <select id="cargo" name="cargo" class="form-control" placeholder="cargo" aria-label="Qual seu Cargo">
        <option value="cargo1">Qual seu cargo?</option>
        <option value="ceo">CEO</option>
        <option value="engenheiro">Engenheiro de Produção</option>
        <option value="ferramenteiro">Ferramenteiro</option>
        <option value="operadorCNC">Operador de CNC</option>
        <option value="programadorCNC">Programador de CNC</option>
        <option value="inspetorQualidade">Inspetor de Qualidade</option>
        <option value="supervisorProducao">Supervisor de Produção</option>
        <option value="analistaProcessos">Analista de Processos</option>
        <option value="tecnicoSeguranca">Técnico de Segurança</option>
        <option value="auxiliarProducao">Auxiliar de Produção</option>
        <option value="almoxarife">Almoxarife</option>
        <option value="estagiario">Estagiário</option>
        <option value="mecanicoManutencao">Mecânico de Manutenção</option>
        <option value="soldador">Soldador</option>
        <option value="caldeireiro">Caldeireiro</option>
        <option value="operadorTorno">Operador de Torno</option>
        <option value="operadorFresa">Operador de Fresa</option>
        <option value="montador">Montador</option>
        <option value="gerenteProducao">Gerente de Produção</option>
        <option value="assistenteAdministrativo">Assistente Administrativo</option>
      </select>
    </div>
  </div>
  <div class="col">
    <div class="input-icone">
      <i class="fa-solid fa-chevron-down icon"></i>
      <select id="urgencia" name="urgencia" class="form-control" placeholder="urgencia" aria-label="urgencia">
        <option value="opcaourgencia">Grau de Urgência</option>
        <option value="baixa">Baixa</option>
        <option value="media">Média</option>
        <option value="alta">Alta</option>
        <option value="critica">Apenas Pesquisando</option>
      </select>
    </div>
  </div>
  <div class="form-floating">
  <textarea name="mensagem" class="form-control" placeholder="Escreva sua pergunta" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Escreva sua pergunta</label>
</div>
</div>
