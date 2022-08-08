<template>
  <div class="col-md-9">
    <div class="container pagina">
      <div class="row">
        <div class="col">
          <h4 class="titulo">Todas Tarefas</h4>
          <hr />
          <div class="row mb-3 d-flex align-items-center tarefa" v-for="task in tasks" :key="task.id_tarefas">
            <div class="col-sm-9">{{task.descricao_tarefa}} {{verificaStatus(task.status_tarefas)}}</div>
            <div class="col-sm-3 mt-2 d-flex justify-content-between">
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
export default {
  name: 'AllTaskView',
  data(){
    return{
      tasks: []
    }
  },
  methods:{
    async getTasks(){
      const req = await fetch('http://localhost/api_tarefas/mostrarTarefas.php');

      const data = await req.json();
      
      this.tasks = data;


      console.log(this.tasks)
    },
    verificaStatus(status){
      switch (status) {
        case 0:
          return 'Excluida';
        case 1:
          return 'Pendente';
        case 2:
          return 'Finalizada';
        default:
          return 'erro'
      }
    }
  },

  mounted(){
    this.getTasks();
  }
}
</script>