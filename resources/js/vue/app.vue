<template>
    <div class="quoteListContainer">
        <div class="heading">
            <h3 id="title">Quotes coming soon</h3>
            <addQuoteForm />
        </div>
        <listView />
    </div>
</template>

<script>
import addQuoteForm from "./addQuoteForm";
import listView from './listView'

export default {
    components: {
        addQuoteForm,
        listView,
    },
};
</script>

<style scooped>
.quoteListContainer{
  width: 350px;
  margin: auto;
}

.heading {
  background: #e6e6e6;
  padding: 10px;
}

#title{
text-align: center;
}
</style>
