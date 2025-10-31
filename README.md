# Amplifica API - Test Técnico Laravel# Amplifica API - Prueba Técnica Laravel



## 📋 DescripciónAPI desarrollada en Laravel para gestión de productos, pedidos e integración con servicio de cotización de envíos.



API REST desarrollada en Laravel 11 para la gestión de productos y pedidos, con integración a la API externa de Amplifica para cotización de envíos. Este proyecto cumple con **todos los requerimientos** del test técnico de Amplifica.## 🚀 Instalación y Configuración



### ✅ Funcionalidades Implementadas### Requisitos

- Docker Desktop

#### **Requerimientos Principales**- Git

- ✅ **Modelo Producto**: CRUD completo con campos id, nombre, precio, peso, ancho, alto, largo, stock

- ✅ **Modelo Pedido**: Gestión completa con cliente_nombre, fecha, total y líneas de detalle### Instalación con Docker

- ✅ **Cálculo automático**: El total del pedido se recalcula automáticamente

- ✅ **Integración API Externa**: Consumo completo de la API de Amplifica1. **Clonar el repositorio**

- ✅ **Manejo de JWT**: Obtención, renovación automática y cache de tokens```bash

git clone <repository-url>

#### **Extras Implementados**cd amplifica-api

- ✅ **Docker**: Configuración completa con docker-compose```

- ✅ **Seeders**: Datos de ejemplo para productos

- ✅ **Validaciones robustas**: Form Requests con reglas de validación2. **Configurar variables de entorno**

- ✅ **Cache inteligente**: Redis para tokens JWT (55 segundos)```bash

- ✅ **Manejo de errores**: Renovación automática de tokens expiradoscp .env.example .env

- ✅ **Base de datos SQLite**: Para fácil configuración y testing```

- ✅ **Configuración flexible**: Variables de entorno para la API externa

Editar el archivo `.env` y configurar:

## 🚀 Instalación y Configuración```bash

AMPLIFICA_API_USER=tu_correo@ejemplo.com

### Opción 1: Con Docker (Recomendado)AMPLIFICA_API_PASS=12345

```

#### Prerrequisitos

- Docker Desktop3. **Construir y ejecutar con Docker Compose**

- Git```bash

docker-compose up -d --build

#### Pasos de instalación```



1. **Clonar el repositorio**4. **Instalar dependencias**

```bash```bash

git clone [URL_DEL_REPOSITORIO]docker-compose exec app composer install

cd amplifica-api```

```

5. **Generar clave de aplicación**

2. **Configurar variables de entorno**```bash

```bashdocker-compose exec app php artisan key:generate

cp .env.example .env```

```

6. **Ejecutar migraciones y seeders**

3. **Configurar tu email en el archivo .env**```bash

```bashdocker-compose exec app php artisan migrate:fresh --seed

# Edita el archivo .env y cambia:```

AMPLIFICA_API_USER=tu_correo@ejemplo.com

```7. **Acceder a la aplicación**

- API: http://localhost:8000

4. **Construir y levantar los contenedores**

```bash## 📚 Endpoints Disponibles

docker compose up --build -d

```### Productos

- `GET /api/v1/products` - Listar productos (paginado)

5. **Generar la clave de aplicación**- `GET /api/v1/products/{id}` - Ver producto específico

```bash- `POST /api/v1/products` - Crear producto

docker compose exec app php artisan key:generate- `PUT /api/v1/products/{id}` - Actualizar producto

```- `DELETE /api/v1/products/{id}` - Eliminar producto



6. **Ejecutar migraciones y seeders****Ejemplo crear producto:**

```bash```json

docker compose exec app php artisan migrate --seedPOST /api/v1/products

```{

    "nombre": "Caja XL",

### Opción 2: Instalación Local    "precio": 5500,

    "peso": 3.5,

#### Prerrequisitos    "ancho": 35,

- PHP 8.2+    "alto": 20,

- Composer    "largo": 50,

- Redis    "stock": 15

- SQLite}

```

#### Pasos de instalación

### Pedidos

1. **Clonar e instalar dependencias**- `GET /api/v1/orders` - Listar pedidos

```bash- `GET /api/v1/orders/{id}` - Ver pedido específico

git clone [URL_DEL_REPOSITORIO]- `POST /api/v1/orders` - Crear pedido

cd amplifica-api- `DELETE /api/v1/orders/{id}` - Eliminar pedido

composer install

```**Ejemplo crear pedido:**

```json

2. **Configurar entorno**POST /api/v1/orders

```bash{

cp .env.example .env    "cliente_nombre": "Juan Pérez",

php artisan key:generate    "fecha": "2025-10-31T10:00:00",

```    "detalles": [

        {

3. **Configurar base de datos**            "product_id": 1,

```bash            "cantidad": 2

touch database/database.sqlite        },

```        {

            "product_id": 2,

4. **Ejecutar migraciones y seeders**            "cantidad": 1

```bash        }

php artisan migrate --seed    ]

```}

```

5. **Iniciar servidor**

```bash### Cotización de Envío

php artisan serve- `POST /api/v1/cotizar-envio` - Cotizar envío

```

**Ejemplo cotización con productos existentes:**

## 📚 Documentación de la API```json

POST /api/v1/cotizar-envio

### Base URL{

- **Docker**: `http://localhost:8000`    "comuna": "Providencia",

- **Local**: `http://localhost:8000`    "items": [

        {

### Endpoints Disponibles            "product_id": 1,

            "quantity": 2

#### 🏪 **Productos**        }

```http    ]

GET    /api/v1/products           # Listar productos (paginado)}

POST   /api/v1/products           # Crear producto```

GET    /api/v1/products/{id}      # Obtener producto específico

PUT    /api/v1/products/{id}      # Actualizar producto**Ejemplo cotización con productos personalizados:**

DELETE /api/v1/products/{id}      # Eliminar producto```json

```POST /api/v1/cotizar-envio

{

**Estructura de Producto:**    "comuna": "Las Condes",

```json    "products": [

{        {

  "id": 1,            "weight": 1.5,

  "nombre": "Caja S",            "quantity": 1

  "precio": 1200.00,        }

  "peso": 0.50,    ]

  "ancho": 10.00,}

  "alto": 5.00,```

  "largo": 15.00,

  "stock": 50,## 🏗️ Arquitectura y Características

  "created_at": "2025-10-31T10:00:00.000000Z",

  "updated_at": "2025-10-31T10:00:00.000000Z"### Implementado ✅

}- **Modelos**: Product, Order, OrderDetail con relaciones

```- **CRUD completo** para productos

- **Gestión de pedidos** con cálculo automático de totales

#### 📦 **Pedidos**- **Integración API externa** con autenticación JWT y renovación automática

```http- **Validaciones** con Form Requests

GET    /api/v1/orders             # Listar pedidos- **Seeders** con datos de ejemplo

POST   /api/v1/orders             # Crear pedido- **Manejo de errores** de autenticación y conexión

GET    /api/v1/orders/{id}        # Obtener pedido con detalles

DELETE /api/v1/orders/{id}        # Eliminar pedido### Características Técnicas

```- **Base de datos**: SQLite (configurable a MySQL/PostgreSQL)

- **Autenticación API externa**: JWT con cache y renovación automática

**Crear Pedido:**- **Validaciones**: Form Requests con reglas de negocio

```json- **Arquitectura**: Servicios separados para integraciones externas

{- **Docker**: Configuración completa para desarrollo

  "cliente_nombre": "Juan Pérez",

  "fecha": "2025-10-31",## 🧪 Testing

  "detalles": [

    {Para ejecutar los tests:

      "product_id": 1,```bash

      "cantidad": 2docker-compose exec app php artisan test

    },```

    {

      "product_id": 2,## 📝 Datos de Ejemplo

      "cantidad": 1

    }El seeder incluye 3 productos de ejemplo:

  ]- Caja S: $1,200 - 0.5kg - 10x5x15cm

}- Caja M: $2,500 - 1.2kg - 20x10x25cm  

```- Caja L: $4,500 - 2.8kg - 30x15x40cm



**Respuesta Pedido:**## 🔧 Comandos Útiles

```json

{```bash

  "id": 1,# Ver logs de la aplicación

  "cliente_nombre": "Juan Pérez",docker-compose logs -f app

  "fecha": "2025-10-31T00:00:00.000000Z",

  "total": 3900.00,# Acceder al contenedor

  "created_at": "2025-10-31T10:00:00.000000Z",docker-compose exec app bash

  "detalles": [

    {# Limpiar cache

      "id": 1,docker-compose exec app php artisan cache:clear

      "order_id": 1,

      "product_id": 1,# Ver rutas disponibles

      "cantidad": 2,docker-compose exec app php artisan route:list

      "precio_unitario": 1200.00,```

      "product": {

        "id": 1,## 🚦 Estado del Proyecto

        "nombre": "Caja S"

      }### ✅ Requerimientos Cumplidos

    }- [x] Modelo Producto con todos los campos requeridos

  ]- [x] CRUD completo de productos con validaciones

}- [x] Modelo Pedido con líneas de detalle

```- [x] Cálculo automático de totales

- [x] Integración con API externa de cotizaciones

#### 🚚 **Cotización de Envíos**- [x] Manejo de autenticación JWT con renovación

```http- [x] Endpoint de cotización local

POST   /api/v1/cotizar-envio      # Cotizar envío- [x] Seeders con datos de ejemplo

```- [x] Configuración Docker



**Cotizar con productos de la base de datos:**### 🎯 Extras Implementados

```json- Cache de tokens JWT

{- Manejo robusto de errores de API

  "comuna": "Providencia",- Configuración flexible de servicios

  "items": [- Documentación completa

    {

      "product_id": 1,---

      "quantity": 2

    }**Desarrollado por:** Sebastian Concha Macías  

  ]**Tecnologías:** Laravel 11, Docker, SQLite, GuzzleHTTP

}
```

**Cotizar con productos personalizados:**
```json
{
  "comuna": "Providencia",
  "products": [
    {
      "weight": 1.5,
      "quantity": 1
    }
  ]
}
```

**Respuesta Cotización:**
```json
{
  "payload": {
    "comuna": "Providencia",
    "products": [
      {
        "weight": 1.0,
        "quantity": 2
      }
    ]
  },
  "tarifas": [
    {
      "carrier": "Chilexpress",
      "service": "Día hábil siguiente",
      "price": 3500
    }
  ]
}
```

## 🔧 Configuración

### Variables de Entorno Principales

```bash
# Aplicación
APP_NAME=AmplificaAPI
APP_URL=http://localhost:8000

# Base de Datos (SQLite por defecto)
DB_CONNECTION=sqlite

# Redis (para cache de tokens)
REDIS_HOST=redis  # 'redis' para Docker, '127.0.0.1' para local
CACHE_STORE=redis

# API Externa Amplifica
AMPLIFICA_API_BASE=https://postulaciones.amplifica.io
AMPLIFICA_API_USER=tu_correo@ejemplo.com
AMPLIFICA_API_PASS=12345
```

## 🧪 Testing

### Probar la API

1. **Verificar que la aplicación esté corriendo**
```bash
curl http://localhost:8000/api/v1/products
```

2. **Crear un producto**
```bash
curl -X POST http://localhost:8000/api/v1/products \
  -H "Content-Type: application/json" \
  -d '{
    "nombre": "Producto Test",
    "precio": 1500,
    "peso": 0.8,
    "ancho": 12,
    "alto": 8,
    "largo": 20,
    "stock": 25
  }'
```

3. **Crear un pedido**
```bash
curl -X POST http://localhost:8000/api/v1/orders \
  -H "Content-Type: application/json" \
  -d '{
    "cliente_nombre": "Test Cliente",
    "fecha": "2025-10-31",
    "detalles": [
      {
        "product_id": 1,
        "cantidad": 2
      }
    ]
  }'
```

4. **Cotizar envío**
```bash
curl -X POST http://localhost:8000/api/v1/cotizar-envio \
  -H "Content-Type: application/json" \
  -d '{
    "comuna": "Providencia",
    "items": [
      {
        "product_id": 1,
        "quantity": 1
      }
    ]
  }'
```

## 📁 Estructura del Proyecto

```
amplifica-api/
├── app/
│   ├── Http/
│   │   ├── Controllers/Api/
│   │   │   ├── ProductController.php
│   │   │   ├── OrderController.php
│   │   │   └── ShippingController.php
│   │   └── Requests/
│   │       ├── StoreProductRequest.php
│   │       ├── UpdateProductRequest.php
│   │       └── StoreOrderRequest.php
│   ├── Models/
│   │   ├── Product.php
│   │   ├── Order.php
│   │   └── OrderDetail.php
│   └── Services/
│       └── ShippingQuoteService.php
├── database/
│   ├── migrations/
│   └── seeders/
├── docker-compose.yml
├── Dockerfile
└── README.md
```

## 🛠️ Comandos Útiles

### Con Docker

```bash
# Ver logs de la aplicación
docker compose logs app

# Acceder al contenedor
docker compose exec app bash

# Ejecutar comandos de Laravel
docker compose exec app php artisan [comando]

# Reiniciar servicios
docker compose restart

# Parar y limpiar
docker compose down
```

### Comandos Laravel

```bash
# Limpiar cache
php artisan cache:clear
php artisan config:clear

# Ver rutas disponibles
php artisan route:list

# Ejecutar migraciones frescas
php artisan migrate:fresh --seed

# Generar nueva clave
php artisan key:generate
```

## 🔍 Características Técnicas

### Arquitectura
- **Laravel 11**: Framework PHP moderno
- **SQLite**: Base de datos ligera y portátil
- **Redis**: Cache para tokens JWT y sesiones
- **Guzzle HTTP**: Cliente para API externa
- **Form Requests**: Validaciones robustas

### Patrones Implementados
- **Repository Pattern**: Separación de lógica de negocio
- **Service Layer**: ShippingQuoteService para API externa  
- **Observer Pattern**: Recálculo automático de totales
- **Cache Strategy**: Gestión inteligente de tokens JWT

### Seguridad
- **Validaciones**: Form Requests con reglas estrictas
- **Sanitización**: Protección contra inyección SQL
- **Token Management**: Renovación automática de JWT
- **Error Handling**: Manejo seguro de excepciones

## 🚀 Despliegue en Producción

### Configuraciones Recomendadas

1. **Variables de entorno de producción**
```bash
APP_ENV=production
APP_DEBUG=false
DB_CONNECTION=mysql  # o postgresql
CACHE_STORE=redis
QUEUE_CONNECTION=redis
```

2. **Optimizaciones**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. **Monitoreo**
- Logs estructurados disponibles en `storage/logs/`
- Métricas de API externa trackeadas
- Cache hits/misses monitoreables

## 📝 Datos de Ejemplo

El seeder incluye 3 productos de ejemplo:
- **Caja S**: $1,200 - 0.5kg - 10×5×15cm - Stock: 50
- **Caja M**: $2,500 - 1.2kg - 20×10×25cm - Stock: 35  
- **Caja L**: $4,500 - 2.8kg - 30×15×40cm - Stock: 20

## 🚦 Cumplimiento de Requerimientos

### ✅ **Requerimientos Principales (100% Completados)**

#### Modelo Producto ✅
- [x] **Campos**: id, nombre, precio, peso, ancho, alto, largo, stock
- [x] **CRUD completo**: crear, listar, actualizar, eliminar
- [x] **Validaciones**: no precios/stocks negativos

#### Modelo Pedido ✅
- [x] **Campos**: id, cliente_nombre, fecha, total
- [x] **Líneas de productos**: pedido_detalles con cantidad y precio
- [x] **Cálculo automático**: total se recalcula automáticamente

#### Integración API Externa ✅
- [x] **POST /auth**: obtención de token JWT
- [x] **GET /regionalConfig**: regiones y comunas disponibles
- [x] **POST /getRate**: cotización de tarifas
- [x] **Renovación automática**: tokens expirados se renuevan
- [x] **Endpoint local**: POST /cotizar-envio implementado
- [x] **Manejo de errores**: autenticación y conexión

### 🎯 **Extras Opcionales Implementados**

- [x] **Seeders**: Datos de ejemplo precargados
- [x] **Dockerfile**: Configuración de contenedores
- [x] **Documentación**: README detallado con ejemplos
- [x] **Validaciones robustas**: Form Requests
- [x] **Arquitectura limpia**: Services y separación de responsabilidades
- [x] **Cache**: Gestión inteligente de tokens JWT
- [x] **Logs estructurados**: Seguimiento de peticiones API
- [x] **Manejo de errores**: Retry automático y error handling

## 🤝 Desarrollo y IA

### Uso de Herramientas de IA
Este proyecto fue desarrollado con asistencia de **GitHub Copilot** para:
- ✅ Documentación completa y ejemplos de uso
- ✅ Patrones de arquitectura y mejores prácticas
- ✅ Manejo de errores y casos edge
- ✅ Testing y validación de funcionalidades

La IA fue utilizada como herramienta de **productividad y calidad**, manteniendo siempre el control sobre las decisiones técnicas y arquitecturales del proyecto.

---

**✨ Proyecto desarrollado para Amplifica - Test Técnico 2025**  
**🚀 Tecnologías:** Laravel 11, Docker, SQLite, Redis, GuzzleHTTP  
**📧 Contacto:** A través del repositorio GitHub
