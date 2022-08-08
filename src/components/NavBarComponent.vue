<template>

    <div class="col-md-3 menu">
      <ul class="list-group">
        <li class="list-group-item" id="active">
          <router-link to="/" class="list-group-link">Tarefas Pendentes</router-link>
        </li>
        <li class="list-group-item">
          <router-link to="/nova_tarefa" class="list-group-link">Nova Tarefas</router-link>
        </li>
        <li class="list-group-item">
          <router-link to="/mostrar_tarefas" class="list-group-link">Todas as Tarefas</router-link>
        </li>
      </ul>
    </div>

</template>


<script>
export default {
  name: "NavBarComponent",
  props: []
};
</script>


<style scoped>
.menu {
  margin-bottom: 25px;
}


.list-group-item#active {
  background-color: whitesmoke;
  border-color: #009933;
  border-left: solid 10px #009933;
}

.list-group-item .list-group-link {
  color: #212529;
  text-decoration: none;
}

.list-group-item .list-group-link:hover {
  color: #4954f4;
}

</style>
