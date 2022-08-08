<template>
  <div class="col-md-9">
    <div class="container pagina">
      <div class="row">
        <div class="col">
          <h4 class="titulo">Tarefas Pendentes</h4>
          <hr />

          <div class="row mb-3 d-flex align-items-center tarefa" v-for="task in tasksPendant" :key="task.id_tarefas">
            <div class="col-sm-9">{{task.descricao_tarefa}}</div>
            <div class="col-sm-3 mt-3 d-flex justify-content-between">
              <i class="fas fa-trash-alt fa-lg text-danger"></i>
              <i class="fas fa-edit fa-lg text-info"></i>
              <i class="fas fa-check-square fa-lg text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: "HomeView",
  data() {
    return {
      tasksPendant: [],
    };
  },

  methods: {
    async getTasks() {
      const req = await fetch(
        "http://localhost/api_tarefas/mostrarTarefas.php"
      );

      const data = await req.json();

      // pegando apenas tasks onde o status for igual a 1 ou seja pendente

		for(let i = 0; i < data.length; i++){
			if(data[i].status_tarefas === 1){
				this.tasksPendant.push(data[i]);
			}
		}

    },
  },

  mounted() {
    this.getTasks();
  },
};
</script>
