#!/bin/bash

# Amplifica API Setup Script

echo "🚀 Configurando Amplifica API..."

# Verificar que Docker esté ejecutándose
if ! docker info > /dev/null 2>&1; then
    echo "❌ Error: Docker no está ejecutándose. Por favor inicia Docker Desktop."
    exit 1
fi

# Crear archivo .env si no existe
if [ ! -f .env ]; then
    echo "📝 Creando archivo .env..."
    cp .env.example .env
    echo "✅ Archivo .env creado. Por favor edita AMPLIFICA_API_USER con tu correo."
fi

# Construir y ejecutar contenedores
echo "🐳 Construyendo contenedores Docker..."
docker-compose up -d --build

# Esperar a que el contenedor esté listo
echo "⏳ Esperando a que el contenedor esté listo..."
sleep 10

# Instalar dependencias
echo "📦 Instalando dependencias..."
docker-compose exec -T app composer install

# Generar clave de aplicación
echo "🔑 Generando clave de aplicación..."
docker-compose exec -T app php artisan key:generate

# Ejecutar migraciones y seeders
echo "🗄️ Ejecutando migraciones y seeders..."
docker-compose exec -T app php artisan migrate:fresh --seed

# Mostrar información final
echo ""
echo "✅ ¡Configuración completada!"
echo ""
echo "🌐 API disponible en: http://localhost:8000"
echo "📚 Endpoints:"
echo "   GET  /api/v1/products - Listar productos"
echo "   POST /api/v1/products - Crear producto"
echo "   GET  /api/v1/orders - Listar pedidos"
echo "   POST /api/v1/orders - Crear pedido"
echo "   POST /api/v1/cotizar-envio - Cotizar envío"
echo ""
echo "🔧 Comandos útiles:"
echo "   docker-compose logs -f app    # Ver logs"
echo "   docker-compose exec app bash  # Acceder al contenedor"
echo "   docker-compose down           # Detener contenedores"
echo ""