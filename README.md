# Amplifica API - Test Técnico Laravel# Amplifica API - Test Técnico Laravel



## 📋 Descripción## 📋 Descripción



API REST desarrollada en Laravel 11 para la gestión de productos y pedidos, con integración a la API externa de Amplifica para cotización de envíos. Este proyecto cumple con **todos los requerimientos** del test técnico de Amplifica.API REST desarrollada en Laravel 11 para la gestión de productos y pedidos, con integración a la API externa de Amplifica para cotización de envíos. Este proyecto cumple con **todos los requerimientos** del test técnico de Amplifica.



### ✅ Funcionalidades Implementadas### ✅ Funcionalidades Implementadas



#### **Requerimientos Principales**#### **Requerimientos Principales**

- ✅ **Modelo Producto**: CRUD completo con campos id, nombre, precio, peso, ancho, alto, largo, stock- ✅ **Modelo Producto**: CRUD completo con campos id, nombre, precio, peso, ancho, alto, largo, stock

- ✅ **Modelo Pedido**: Gestión completa con cliente_nombre, fecha, total y líneas de detalle- ✅ **Modelo Pedido**: Gestión completa con cliente_nombre, fecha, total y líneas de detalle

- ✅ **Cálculo automático**: El total del pedido se recalcula automáticamente- ✅ **Cálculo automático**: El total del pedido se recalcula automáticamente

- ✅ **Integración API Externa**: Consumo completo de la API de Amplifica- ✅ **Integración API Externa**: Consumo completo de la API de Amplifica

- ✅ **Manejo de JWT**: Obtención, renovación automática y cache de tokens- ✅ **Manejo de JWT**: Obtención, renovación automática y cache de tokens



#### **Extras Implementados**#### **Extras Implementados**

- ✅ **Docker**: Configuración completa con docker-compose- ✅ **Docker**: Configuración completa con docker-compose

- ✅ **Seeders**: Datos de ejemplo para productos- ✅ **Seeders**: Datos de ejemplo para productos

- ✅ **Validaciones robustas**: Form Requests con reglas de validación- ✅ **Validaciones robustas**: Form Requests con reglas de validación

- ✅ **Cache inteligente**: Redis para tokens JWT (55 segundos)- ✅ **Cache inteligente**: Redis para tokens JWT (55 segundos)

- ✅ **Manejo de errores**: Renovación automática de tokens expirados- ✅ **Manejo de errores**: Renovación automática de tokens expirados

- ✅ **Base de datos SQLite**: Para fácil configuración y testing- ✅ **Base de datos SQLite**: Para fácil configuración y testing

- ✅ **Configuración flexible**: Variables de entorno para la API externa- ✅ **Configuración flexible**: Variables de entorno para la API externa



## 🚀 Instalación y Configuración## 🚀 Instalación y Configuración



### Opción 1: Con Docker (Recomendado)### Opción 1: Con Docker (Recomendado)



#### Prerrequisitos#### Prerrequisitos

- Docker Desktop- Docker Desktop

- Git- Git



#### Pasos de instalación#### Pasos de instalación



1. **Clonar el repositorio**1. **Clonar el repositorio**

```bash```bash

git clone https://github.com/sebacoma/PruebaTecnica.gitgit clone https://github.com/sebacoma/PruebaTecnica.git

cd PruebaTecnicacd PruebaTecnica

``````



2. **Configurar variables de entorno**2. **Configurar variables de entorno**

```bash```bash

cp .env.example .envcp .env.example .env

``````



3. **Configurar tu email en el archivo .env**3. **Configurar tu email en el archivo .env**

```bash```bash

# Edita el archivo .env y cambia:# Edita el archivo .env y cambia:

AMPLIFICA_API_USER=tu_correo@ejemplo.comAMPLIFICA_API_USER=tu_correo@ejemplo.com

``````



4. **Construir y levantar los contenedores**4. **Construir y levantar los contenedores**

```bash```bash

docker compose up --build -ddocker compose up --build -d

``````



5. **Instalar dependencias de PHP**5. **Instalar dependencias de PHP**

```bash```bash

docker compose exec app composer installdocker compose exec app composer install

``````



6. **Generar la clave de aplicación**6. **Generar la clave de aplicación**

```bash```bash

docker compose exec app php artisan key:generatedocker compose exec app php artisan key:generate

``````



7. **Ejecutar migraciones y seeders**7. **Ejecutar migraciones y seeders**

```bash```bash

docker compose exec app php artisan migrate --seeddocker compose exec app php artisan migrate --seed

``````



8. **Verificar que la API esté funcionando**8. **Verificar que la API esté funcionando**

- API: http://localhost:8000- API: http://localhost:8000

- Test: http://localhost:8000/api/v1/products- Test: http://localhost:8000/api/v1/products



### Opción 2: Instalación Local



#### Prerrequisitos### ✅ Funcionalidades Implementadas### Requisitos

- PHP 8.2+

- Composer- Docker Desktop

- Redis

- SQLite#### **Requerimientos Principales**- Git



#### Pasos de instalación- ✅ **Modelo Producto**: CRUD completo con campos id, nombre, precio, peso, ancho, alto, largo, stock



1. **Clonar e instalar dependencias**- ✅ **Modelo Pedido**: Gestión completa con cliente_nombre, fecha, total y líneas de detalle### Instalación con Docker

```bash

git clone https://github.com/sebacoma/PruebaTecnica.git- ✅ **Cálculo automático**: El total del pedido se recalcula automáticamente

cd PruebaTecnica

composer install- ✅ **Integración API Externa**: Consumo completo de la API de Amplifica1. **Clonar el repositorio**

```

- ✅ **Manejo de JWT**: Obtención, renovación automática y cache de tokens```bash

2. **Configurar entorno**

```bashgit clone <repository-url>

cp .env.example .env

php artisan key:generate#### **Extras Implementados**cd amplifica-api

```

- ✅ **Docker**: Configuración completa con docker-compose```

3. **Configurar base de datos**

```bash- ✅ **Seeders**: Datos de ejemplo para productos

touch database/database.sqlite

```- ✅ **Validaciones robustas**: Form Requests con reglas de validación2. **Configurar variables de entorno**



4. **Ejecutar migraciones y seeders**- ✅ **Cache inteligente**: Redis para tokens JWT (55 segundos)```bash

```bash

php artisan migrate --seed- ✅ **Manejo de errores**: Renovación automática de tokens expiradoscp .env.example .env

```

- ✅ **Base de datos SQLite**: Para fácil configuración y testing```

5. **Iniciar servidor**

```bash- ✅ **Configuración flexible**: Variables de entorno para la API externa

php artisan serve

```Editar el archivo `.env` y configurar:



## 📚 Documentación de la API## 🚀 Instalación y Configuración```bash



### Base URLAMPLIFICA_API_USER=tu_correo@ejemplo.com

- **Docker**: `http://localhost:8000`

- **Local**: `http://localhost:8000`### Opción 1: Con Docker (Recomendado)AMPLIFICA_API_PASS=12345



### Endpoints Disponibles```



#### 🏪 **Productos**#### Prerrequisitos

```http

GET    /api/v1/products           # Listar productos (paginado)- Docker Desktop3. **Construir y ejecutar con Docker Compose**

POST   /api/v1/products           # Crear producto

GET    /api/v1/products/{id}      # Obtener producto específico- Git```bash

PUT    /api/v1/products/{id}      # Actualizar producto

DELETE /api/v1/products/{id}      # Eliminar productodocker-compose up -d --build

```

#### Pasos de instalación```

**Estructura de Producto:**

```json

{

  "id": 1,1. **Clonar el repositorio**4. **Instalar dependencias**

  "nombre": "Caja S",

  "precio": 1200.00,```bash```bash

  "peso": 0.50,

  "ancho": 10.00,git clone [URL_DEL_REPOSITORIO]docker-compose exec app composer install

  "alto": 5.00,

  "largo": 15.00,cd amplifica-api```

  "stock": 50,

  "created_at": "2025-10-31T10:00:00.000000Z",```

  "updated_at": "2025-10-31T10:00:00.000000Z"

}5. **Generar clave de aplicación**

```

2. **Configurar variables de entorno**```bash

#### 📦 **Pedidos**

```http```bashdocker-compose exec app php artisan key:generate

GET    /api/v1/orders             # Listar pedidos

POST   /api/v1/orders             # Crear pedidocp .env.example .env```

GET    /api/v1/orders/{id}        # Obtener pedido con detalles

DELETE /api/v1/orders/{id}        # Eliminar pedido```

```

6. **Ejecutar migraciones y seeders**

**Crear Pedido:**

```json3. **Configurar tu email en el archivo .env**```bash

{

  "cliente_nombre": "Juan Pérez",```bashdocker-compose exec app php artisan migrate:fresh --seed

  "fecha": "2025-10-31",

  "detalles": [# Edita el archivo .env y cambia:```

    {

      "product_id": 1,AMPLIFICA_API_USER=tu_correo@ejemplo.com

      "cantidad": 2

    },```7. **Acceder a la aplicación**

    {

      "product_id": 2,- API: http://localhost:8000

      "cantidad": 1

    }4. **Construir y levantar los contenedores**

  ]

}```bash## 📚 Endpoints Disponibles

```

docker compose up --build -d

#### 🚚 **Cotización de Envíos**

```http```### Productos

POST   /api/v1/cotizar-envio      # Cotizar envío

```- `GET /api/v1/products` - Listar productos (paginado)



**Cotizar con productos de la base de datos:**5. **Generar la clave de aplicación**- `GET /api/v1/products/{id}` - Ver producto específico

```json

{```bash- `POST /api/v1/products` - Crear producto

  "comuna": "Providencia",

  "items": [docker compose exec app php artisan key:generate- `PUT /api/v1/products/{id}` - Actualizar producto

    {

      "product_id": 1,```- `DELETE /api/v1/products/{id}` - Eliminar producto

      "quantity": 2

    }

  ]

}6. **Ejecutar migraciones y seeders****Ejemplo crear producto:**

```

```bash```json

## 🔧 Configuración

docker compose exec app php artisan migrate --seedPOST /api/v1/products

### Variables de Entorno Principales

```{

```bash

# Aplicación    "nombre": "Caja XL",

APP_NAME=AmplificaAPI

APP_URL=http://localhost:8000### Opción 2: Instalación Local    "precio": 5500,



# Base de Datos (SQLite por defecto)    "peso": 3.5,

DB_CONNECTION=sqlite

#### Prerrequisitos    "ancho": 35,

# Redis (para cache de tokens)

REDIS_HOST=redis  # 'redis' para Docker, '127.0.0.1' para local- PHP 8.2+    "alto": 20,

CACHE_STORE=redis

- Composer    "largo": 50,

# API Externa Amplifica

AMPLIFICA_API_BASE=https://postulaciones.amplifica.io- Redis    "stock": 15

AMPLIFICA_API_USER=tu_correo@ejemplo.com

AMPLIFICA_API_PASS=12345- SQLite}

```

```

## 🧪 Testing

#### Pasos de instalación

### Probar la API

### Pedidos

1. **Verificar que la aplicación esté corriendo**

```bash1. **Clonar e instalar dependencias**- `GET /api/v1/orders` - Listar pedidos

curl http://localhost:8000/api/v1/products

``````bash- `GET /api/v1/orders/{id}` - Ver pedido específico



2. **Crear un producto**git clone [URL_DEL_REPOSITORIO]- `POST /api/v1/orders` - Crear pedido

```bash

curl -X POST http://localhost:8000/api/v1/products \cd amplifica-api- `DELETE /api/v1/orders/{id}` - Eliminar pedido

  -H "Content-Type: application/json" \

  -d '{composer install

    "nombre": "Producto Test",

    "precio": 1500,```**Ejemplo crear pedido:**

    "peso": 0.8,

    "ancho": 12,```json

    "alto": 8,

    "largo": 20,2. **Configurar entorno**POST /api/v1/orders

    "stock": 25

  }'```bash{

```

cp .env.example .env    "cliente_nombre": "Juan Pérez",

3. **Crear un pedido**

```bashphp artisan key:generate    "fecha": "2025-10-31T10:00:00",

curl -X POST http://localhost:8000/api/v1/orders \

  -H "Content-Type: application/json" \```    "detalles": [

  -d '{

    "cliente_nombre": "Test Cliente",        {

    "fecha": "2025-10-31",

    "detalles": [3. **Configurar base de datos**            "product_id": 1,

      {

        "product_id": 1,```bash            "cantidad": 2

        "cantidad": 2

      }touch database/database.sqlite        },

    ]

  }'```        {

```

            "product_id": 2,

## 🛠️ Comandos Útiles

4. **Ejecutar migraciones y seeders**            "cantidad": 1

### Con Docker

```bash        }

```bash

# Ver logs de la aplicaciónphp artisan migrate --seed    ]

docker compose logs app

```}

# Acceder al contenedor

docker compose exec app bash```



# Ejecutar comandos de Laravel5. **Iniciar servidor**

docker compose exec app php artisan [comando]

```bash### Cotización de Envío

# Reiniciar servicios

docker compose restartphp artisan serve- `POST /api/v1/cotizar-envio` - Cotizar envío



# Parar y limpiar```

docker compose down

```**Ejemplo cotización con productos existentes:**



## 📁 Estructura del Proyecto## 📚 Documentación de la API```json



```POST /api/v1/cotizar-envio

amplifica-api/

├── app/### Base URL{

│   ├── Http/

│   │   ├── Controllers/Api/- **Docker**: `http://localhost:8000`    "comuna": "Providencia",

│   │   │   ├── ProductController.php

│   │   │   ├── OrderController.php- **Local**: `http://localhost:8000`    "items": [

│   │   │   └── ShippingController.php

│   │   └── Requests/        {

│   │       ├── StoreProductRequest.php

│   │       ├── UpdateProductRequest.php### Endpoints Disponibles            "product_id": 1,

│   │       └── StoreOrderRequest.php

│   ├── Models/            "quantity": 2

│   │   ├── Product.php

│   │   ├── Order.php#### 🏪 **Productos**        }

│   │   └── OrderDetail.php

│   └── Services/```http    ]

│       └── ShippingQuoteService.php

├── database/GET    /api/v1/products           # Listar productos (paginado)}

│   ├── migrations/

│   └── seeders/POST   /api/v1/products           # Crear producto```

├── docker-compose.yml

├── DockerfileGET    /api/v1/products/{id}      # Obtener producto específico

└── README.md

```PUT    /api/v1/products/{id}      # Actualizar producto**Ejemplo cotización con productos personalizados:**



## 🚦 Cumplimiento de RequerimientosDELETE /api/v1/products/{id}      # Eliminar producto```json



### ✅ **Requerimientos Principales (100% Completados)**```POST /api/v1/cotizar-envio



#### Modelo Producto ✅{

- [x] **Campos**: id, nombre, precio, peso, ancho, alto, largo, stock

- [x] **CRUD completo**: crear, listar, actualizar, eliminar**Estructura de Producto:**    "comuna": "Las Condes",

- [x] **Validaciones**: no precios/stocks negativos

```json    "products": [

#### Modelo Pedido ✅

- [x] **Campos**: id, cliente_nombre, fecha, total{        {

- [x] **Líneas de productos**: pedido_detalles con cantidad y precio

- [x] **Cálculo automático**: total se recalcula automáticamente  "id": 1,            "weight": 1.5,



#### Integración API Externa ✅  "nombre": "Caja S",            "quantity": 1

- [x] **POST /auth**: obtención de token JWT

- [x] **GET /regionalConfig**: regiones y comunas disponibles  "precio": 1200.00,        }

- [x] **POST /getRate**: cotización de tarifas

- [x] **Renovación automática**: tokens expirados se renuevan  "peso": 0.50,    ]

- [x] **Endpoint local**: POST /cotizar-envio implementado

- [x] **Manejo de errores**: autenticación y conexión  "ancho": 10.00,}



### 🎯 **Extras Opcionales Implementados**  "alto": 5.00,```



- [x] **Seeders**: Datos de ejemplo precargados  "largo": 15.00,

- [x] **Dockerfile**: Configuración de contenedores

- [x] **Documentación**: README detallado con ejemplos  "stock": 50,## 🏗️ Arquitectura y Características

- [x] **Validaciones robustas**: Form Requests

- [x] **Arquitectura limpia**: Services y separación de responsabilidades  "created_at": "2025-10-31T10:00:00.000000Z",

- [x] **Cache**: Gestión inteligente de tokens JWT

- [x] **Logs estructurados**: Seguimiento de peticiones API  "updated_at": "2025-10-31T10:00:00.000000Z"### Implementado ✅

- [x] **Manejo de errores**: Retry automático y error handling

}- **Modelos**: Product, Order, OrderDetail con relaciones

## 🎨 Frontend Complementario

```- **CRUD completo** para productos

### 🚀 **Interfaz Web Disponible**

- **Gestión de pedidos** con cálculo automático de totales

Este proyecto incluye un **frontend moderno desarrollado en React + Vite** que consume toda la funcionalidad de esta API:

#### 📦 **Pedidos**- **Integración API externa** con autenticación JWT y renovación automática

**📂 Repositorio Frontend:** https://github.com/sebacoma/PruebaTecnicaFrontend

```http- **Validaciones** con Form Requests

### ✨ **Características del Frontend:**

- ✅ **Dashboard interactivo** con navegación modernaGET    /api/v1/orders             # Listar pedidos- **Seeders** con datos de ejemplo

- ✅ **CRUD de productos** con modales y validaciones

- ✅ **Sistema de pedidos** completo e intuitivoPOST   /api/v1/orders             # Crear pedido- **Manejo de errores** de autenticación y conexión

- ✅ **Cotización de envíos** integrada

- ✅ **Diseño responsive** para todos los dispositivosGET    /api/v1/orders/{id}        # Obtener pedido con detalles

- ✅ **React Router** para navegación fluida

DELETE /api/v1/orders/{id}        # Eliminar pedido### Características Técnicas

### 🚀 **Instalación Rápida del Frontend:**

```bash```- **Base de datos**: SQLite (configurable a MySQL/PostgreSQL)

git clone https://github.com/sebacoma/PruebaTecnicaFrontend.git

cd PruebaTecnicaFrontend- **Autenticación API externa**: JWT con cache y renovación automática

npm install && npm run dev

```**Crear Pedido:**- **Validaciones**: Form Requests con reglas de negocio



### 🔗 **Integración Completa:**```json- **Arquitectura**: Servicios separados para integraciones externas

El frontend está completamente integrado con esta API y permite:

- Gestionar productos desde una interfaz amigable{- **Docker**: Configuración completa para desarrollo

- Crear y visualizar pedidos con cálculos automáticos

- Cotizar envíos con la API externa de Amplifica  "cliente_nombre": "Juan Pérez",

- Navegar entre todas las funcionalidades de forma intuitiva

  "fecha": "2025-10-31",## 🧪 Testing

**💡 Nota:** El frontend es un **extra no requerido** en el test técnico, desarrollado para demostrar capacidades full-stack y ofrecer una experiencia completa del sistema.

  "detalles": [

## 🤝 Desarrollo y IA

    {Para ejecutar los tests:

### Uso de Herramientas de IA

Este proyecto fue desarrollado con asistencia de **GitHub Copilot** para:      "product_id": 1,```bash

- ✅ Generación de boilerplate code y estructura inicial

- ✅ Optimización de consultas y validaciones      "cantidad": 2docker-compose exec app php artisan test

- ✅ Documentación completa y ejemplos de uso

- ✅ Patrones de arquitectura y mejores prácticas    },```

- ✅ Manejo de errores y casos edge

- ✅ Testing y validación de funcionalidades    {



La IA fue utilizada como herramienta de **productividad y calidad**, manteniendo siempre el control sobre las decisiones técnicas y arquitecturales del proyecto.      "product_id": 2,## 📝 Datos de Ejemplo



---      "cantidad": 1



**✨ Proyecto desarrollado para Amplifica - Test Técnico 2025**      }El seeder incluye 3 productos de ejemplo:

**🚀 Tecnologías:** Laravel 11, Docker, SQLite, Redis, GuzzleHTTP  

**📧 Contacto:** A través del repositorio GitHub  ]- Caja S: $1,200 - 0.5kg - 10x5x15cm

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

## 🎨 Frontend Complementario

### 🚀 **Interfaz Web Disponible**

Este proyecto incluye un **frontend moderno desarrollado en React + Vite** que consume toda la funcionalidad de esta API:

**📂 Repositorio Frontend:** https://github.com/sebacoma/PruebaTecnicaFrontend

### ✨ **Características del Frontend:**
- ✅ **Dashboard interactivo** con navegación moderna
- ✅ **CRUD de productos** con modales y validaciones
- ✅ **Sistema de pedidos** completo e intuitivo
- ✅ **Cotización de envíos** integrada
- ✅ **Diseño responsive** para todos los dispositivos
- ✅ **React Router** para navegación fluida

### 🛠️ **Tecnologías Frontend:**
- **React 18** + **Vite** para desarrollo rápido
- **Axios** para consumo de API
- **React Router** para navegación
- **Heroicons** para iconografía
- **CSS personalizado** sin frameworks pesados

### 🚀 **Instalación Rápida del Frontend:**
```bash
git clone https://github.com/sebacoma/PruebaTecnicaFrontend.git
cd PruebaTecnicaFrontend
npm install && npm run dev
```

### 🔗 **Integración Completa:**
El frontend está completamente integrado con esta API y permite:
- Gestionar productos desde una interfaz amigable
- Crear y visualizar pedidos con cálculos automáticos
- Cotizar envíos con la API externa de Amplifica
- Navegar entre todas las funcionalidades de forma intuitiva

**💡 Nota:** El frontend es un **extra no requerido** en el test técnico, desarrollado para demostrar capacidades full-stack y ofrecer una experiencia completa del sistema.

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
