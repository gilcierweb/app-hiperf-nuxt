<template>
  <div>
    <div class="grid grid-cols-5 gap-4">
      <Button variant="accent">Button</Button>
      <Button variant="secondary">Button</Button>
      <Button variant="success">Button success</Button>
      <Button variant="info">Button info</Button>
      <Button variant="warning">Button warning</Button>
      <Button variant="error">Button error</Button>
      <Button variant="">Button</Button>
      <Button variant="destructive">Button</Button>
      <Button variant="bg-green-500" class="bg-green-500 text-white"
        >Button</Button
      >
      <Button class="btn btn-primary">Button</Button>
      <button class="btn btn-primary">Button btn-primary</button>
      <button class="btn btn-success">Button btn-success</button>
      <Button>Button</Button>
      <Button>Button</Button>
    </div>
    <div class="bg-warning bg-green-400 text-warning-foreground">
      alert warning
    </div>
    <div class="grid grid-cols-3 gap-4">
      <Card>
        <CardHeader>
          <CardTitle>Card Title</CardTitle>
          <CardDescription>Card Description</CardDescription>
        </CardHeader>
        <CardContent> Card Content </CardContent>
        <CardFooter> Card Footer </CardFooter>
      </Card>
      <Card>
        <CardHeader>
          <CardTitle>Card Title</CardTitle>
          <CardDescription>Card Description</CardDescription>
        </CardHeader>
        <CardContent> Card Content </CardContent>
        <CardFooter> Card Footer </CardFooter>
      </Card>
      <Card>
        <CardHeader>
          <CardTitle>Card Title</CardTitle>
          <CardDescription>Card Description</CardDescription>
        </CardHeader>
        <CardContent> Card Content </CardContent>
        <CardFooter> Card Footer </CardFooter>
      </Card>
    </div>
    <Card class="w-[350px]">
      <CardHeader>
        <CardTitle>Create project</CardTitle>
        <CardDescription>Deploy your new project in one-click.</CardDescription>
      </CardHeader>
      <CardContent>
        <form>
          <div class="grid items-center w-full gap-4">
            <div class="flex flex-col space-y-1.5">
              <Label for="name">Name</Label>
              <Input id="name" placeholder="Name of your project" />
            </div>
            <div class="flex flex-col space-y-1.5">
              <Label for="framework">Framework</Label>
              <Select>
                <SelectTrigger id="framework">
                  <SelectValue placeholder="Select" />
                </SelectTrigger>
                <SelectContent position="popper">
                  <SelectItem value="nuxt"> Nuxt </SelectItem>
                  <SelectItem value="next"> Next.js </SelectItem>
                  <SelectItem value="sveltekit"> SvelteKit </SelectItem>
                  <SelectItem value="astro"> Astro </SelectItem>
                </SelectContent>
              </Select>
            </div>
          </div>
        </form>
      </CardContent>
      <CardFooter class="flex justify-between px-6 pb-6">
        <Button variant="outline"> Cancel </Button>
        <Button>Deploy</Button>
      </CardFooter>
    </Card>

    <div v-if="data == null">No data</div>
    <div v-else>
      <h1>Products</h1>
      <div class="grid grid-cols-3 gap-4">
        <template v-for="product in data.products" :key="product.id">
          <div class="card sm:max-w-sm">
            <figure>
                  <img
                :lazy-src="product.thumbnail"
                :src="product.thumbnail"
                cover
                alt="image"
                aspect-ratio="1"
              />
            </figure>
            <div class="card-body">
              <h5 class="card-title mb-2.5">{{ product.title }}</h5>
              <p class="text-success font-weight-bold">{{ formatNumberBR(product?.price) }}</p>
              <p class="mb-4">
                {{ $truncate(product.description, 70, '...') }}
              </p>
              <p> {{ product.category }}</p>
              <div class="card-actions">
                <button class="btn btn-primary">Buy Now</button>
               <NuxtLink :to="`/products/${product.id}`">             
                      <button class="btn btn-secondary btn-soft btn-block">Details</button>
                </NuxtLink>
              </div>
            </div>
          </div>        

        </template>
      </div>
      <div v-if="data.products.length === 0">No products available.</div>
    </div>
  </div>
</template>

<script setup lang="ts">
const { data } = await useFetch("https://dummyjson.com/products");
</script>

<style scoped></style>
