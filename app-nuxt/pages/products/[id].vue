<template>
    <div>
        <div>
            <h1>Show Product Page</h1>

            <div v-if="pending">
                <div>
                    Loading ... <br>  
                    <span class="loading loading-spinner loading-xl"></span>               
                </div>
            </div>

            <div v-else  class="grid grid-cols-2">
                <div>

                    <!-- Product Images -->
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <img :lazy-src="product?.thumbnail" :src="product?.thumbnail" alt="image" 
                            class="w-full h-auto rounded-lg shadow-md mb-4">
                        <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                            <div v-for="(item, index) in product.images" :key="index">
                                <img :lazy-src="item" :src="item" alt="image" 
                                    class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300">
                            </div>
                        </div>
                    </div>
                </div>

                <div >
                    <h1 class="text-base-content text-4xl">{{ product?.title }}</h1>
                    <p class="text-success font-weight-bold mt-2">{{ formatNumberBR(product?.price) }}</p>
                    <p class="my-3"><v-chip>{{ product?.category }}</v-chip></p>                
                     <button class="btn btn-primary btn-xl">Buy Now</button>
                </div>
                <div class="grid grid-cols-1">
                    <p>{{ product?.description }}</p>
                </div>

            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
const route = useRoute();
// const config = useRuntimeConfig(); 


const id = route.params.id;
console.log(route.params.id);

interface Product {
    id: number;
    title: string;
    description: string;
    price: number;
    url: string;
    category: string;
    image: string;
}

const { data: product, pending } = await useLazyFetch<Product>(`https://dummyjson.com/products/${id}`);
</script>

<style scoped></style>