<template>
    <div class="flex">
    <v-card color="#ebf2f3" style="width: 50%;">
        <v-card-title>Recipe Name</v-card-title>
        <v-textarea
            label="Name"
            row-height="15"
            rows="1"
            variant="outlined"
            auto-grow="auto-grow"
            style="width: 95%; padding-left: 1rem;"></v-textarea>
        <v-card-title>Recipe Ingredients</v-card-title>
        <v-textarea
            label="Ingredients"
            variant="outlined"
            auto-grow="auto-grow"
            style="width: 95%; padding-left: 1rem;"></v-textarea>

        <v-row>
            <v-col> 
                <v-textarea style="width: 90%; padding-left: 1rem;"
                    label="No. of Serving(s)"
                                row-height="15"
            rows="1"
                    variant="outlined"
                    auto-grow="auto-grow"></v-textarea>
            </v-col>
            <v-col>
                <v-textarea style="width: 90%; padding-left: 1rem;"
                    label="Serving Size"
            row-height="15"
            rows="1"
                    variant="outlined"
                    auto-grow="auto-grow"></v-textarea>
            </v-col>
        </v-row>
        <v-col cols="auto">
            <v-btn color="#024A42" size="x-large">Calculate Recipe</v-btn>
        </v-col>
    </v-card>
    <v-row>
        <v-col cols="6">
      <v-card color="#ebf2f3" style="width: 100%;">
        </v-card>
    </v-col>
    <v-col cols="6">
      <v-container class="bg-surface-variant">
        </v-container>
    </v-col>
    </v-row>
    </div>
</template>

<script>
export default{
    name: 'CalculatorForm'
}
</script>

