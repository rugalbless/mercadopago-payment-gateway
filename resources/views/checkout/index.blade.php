<x-app-layout>
    <div class="bg-tertiary-900">
        <!-- Background color split screen for large screens -->
        <div class="fixed left-0 top-0 hidden h-full w-1/2 bg-tertiary-900 lg:block" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden h-full w-1/2 bg-tertiary-800 lg:block" aria-hidden="true"></div>
        <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">
            <section aria-labelledby="summary-heading" class="bg-tertiary-800 py-12 text-indigo-300 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-2xl font-bold text-primary-200 ">Resumo</dt>
                    </dl>
                    <x-checkout.product-list>
                        <x-checkout.product-item
                            name="High Wall Tote"
                            price="210,00"
                            :features="['White and black', '15L']"
                            quantity="2"
                            image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                        />
                    </x-checkout.product-list>


                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-lg font-medium">
                        <x-checkout.summary-item title="Subtotal" value="210,00" :is-underlined="true"  value-color="text-neutral-300 " />
                        <x-checkout.summary-item title="Frete" value="0" :is-underlined="true" value-color="text-neutral-300" />
                        <x-checkout.summary-item title="Total" value="210,00" :is-last="true" :is-underlined="false" value-color="text-green-400" />
                    </dl>


                </div>
            </section>
            <section aria-labelledby="payment-and-shipping-heading" class="py-16 -mt-5 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <h3 id="contact-info-heading" class="text-2xl font-bold text-white">Informação de contato</h3>
                            <div class="mt-6">
                                <label for="email-address" class="block text-lg font-medium text-white ">Email address</label>
                                <div class="mt-1">
                                    <input type="email" id="email-address" name="email-address" autocomplete="email" class="   block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 ">
                            <h3 class="text-2xl font-bold text-white">Detalhes do pagamento</h3>
                            <div class="mt-3 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <label for="card-number" class="block text-lg font-medium text-white">Numero do cartao</label>
                                    <div class="mt-1">
                                        <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-3">
                                    <label for="expiration-date" class="block text-lg font-medium text-white">Data de expiração (MM/YY)</label>
                                    <div class="mt-1">
                                        <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label for="cvc" class="block text-lg font-medium text-white">CVC</label>
                                    <div class="mt-1">
                                        <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3.5 -mb-7">
                            <h3 class="text-2xl font-bold text-white">Endereço</h3>
                            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-3 -mb-2.5 ">
                                    <label for="address" class="block text-lg font-medium text-white -mt-2">Rua</label>
                                    <div class="mt-1">
                                        <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label for="city" class="block text-lg font-medium text-white">Cidade</label>
                                    <div class="mt-1">
                                        <input type="text" id="city" name="city" autocomplete="address-level2" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label for="region" class="block text-lg font-medium text-white">Estado</label>
                                    <div class="mt-1">
                                        <input type="text" id="region" name="region" autocomplete="address-level1" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                                <div>
                                    <label for="postal-code" class="block text-lg font-medium text-white">CEP</label>
                                    <div class="mt-1">
                                        <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 flex justify-end  pt-6">
                            <button type="submit" class="rounded-md w-full border border-transparent bg-secondary-600 px-4 py-2 text-xl font-bold text-white shadow-sm hover:bg-secondary-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50">
                                Comprar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
