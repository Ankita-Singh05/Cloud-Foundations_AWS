-- Databricks notebook source
-- MAGIC %fs ls /databricks-datasets/samples/population-vs-price/

-- COMMAND ----------

CREATE TABLE  IF NOT EXISTS population_v_price
USING CSV
OPTIONS (path "/databricks-datasets/samples/population-vs-price/data_geo.csv", header "true", inferSchema "true");
	

-- COMMAND ----------

select * from population_v_price limit 100;

-- COMMAND ----------

CREATE TABLE IF NOT EXISTS online_retail(
InvoiceNo string,
StockCode string,
Description string,
Quantity int,
InvoiceDate string,
UnitPrice double,
CustomerID int,
Country string)
USING CSV
OPTIONS (path "/databricks-datasets/online_retail/data-001/data.csv", header "true");


-- COMMAND ----------

select * from online_retail limit 100;

-- COMMAND ----------


