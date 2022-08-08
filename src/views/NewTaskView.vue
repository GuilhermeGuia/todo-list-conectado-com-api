<template>
  <div class="col-md-9">
    <div class="container pagina">
      <div class="row">
        <div class="col">
          <h4 class="titulo">Nova Tarefa</h4>
          <hr />
          <p>Descrição da tarefa:</p>
          <input
            type="text"
            name=""
            class="form-control"
            id=""
            placeholder="Exemplo: Lavar o carro"
            v-model="taskDescription"
          />

          <button class="btn btn-success mt-3" @click="insertTask()">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: 'NewTaskView',
  data(){
    return{
      taskDescription: ''
    }
  },
  methods: {
    insertTask(){
      if (this.taskDescription === '') return;
      
      const data = {
        descricao_tarefa: this.taskDescription,
        status: 1
      };

      const dataJson = JSON.stringify(data);
      console.log(dataJson);

      // enviar para o servidor metodo POST

      const req = await fetch("http://localhost/api_tarefas/cadastrarTarefas.php",{
        method: 'POST',
        headers: {"Content-Type": "application/json"},
        body: dataJson
      });
      const res = await req.json();

      console.log(res);
    }
  }
}
</script>