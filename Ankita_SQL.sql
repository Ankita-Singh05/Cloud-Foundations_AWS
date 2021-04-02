-- Databricks notebook source
DROP TABLE IF EXISTS diamonds;

CREATE TABLE diamonds
USING csv
OPTIONS (path "/databricks-datasets/Rdatasets/data-001/csv/ggplot2/diamonds.csv", header "true")

-- COMMAND ----------

SELECT count(*)  from diamonds

-- COMMAND ----------

-- MAGIC %python
-- MAGIC diamonds = spark.read.csv("/databricks-datasets/Rdatasets/data-001/csv/ggplot2/diamonds.csv", header="true", inferSchema="true")
-- MAGIC diamonds.write.format("delta").save("/delta/diamonds")

-- COMMAND ----------

-- MAGIC %python
-- MAGIC 
-- MAGIC display(diamonds)

-- COMMAND ----------

DROP TABLE IF EXISTS diamonds;

CREATE TABLE diamonds USING DELTA LOCATION '/delta/diamonds/'


-- COMMAND ----------

SELECT * from diamonds

-- COMMAND ----------

SELECT color, avg(price) AS price FROM diamonds GROUP BY color ORDER BY color

-- COMMAND ----------

-- MAGIC %python
-- MAGIC diamonds = spark.read.csv("/databricks-datasets/Rdatasets/data-001/csv/ggplot2/diamonds.csv", header="true", inferSchema="true")

-- COMMAND ----------

-- MAGIC %python
-- MAGIC 
-- MAGIC from pyspark.sql.functions import avg
-- MAGIC 
-- MAGIC display(diamonds.select("color","price").groupBy("color").agg(avg("price")).sort("color"))

-- COMMAND ----------

-- MAGIC %fs ls

-- COMMAND ----------

select *
from cogsley_sales
limit 100;


-- COMMAND ----------


