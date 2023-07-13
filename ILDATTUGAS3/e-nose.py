import joblib
import pandas as pd
from sklearn import preprocessing
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import GridSearchCV

#print('machine learning')
# klasifikasi
model_file = 'model/e-nose_classification_model.sav'
data_file = pd.read_csv('dataset/dataset.csv')
features = data_file.loc[:,'MQ135':'Temperature'].values
#print(data_file)
#label = data_file['class']

# melakukan feature scaling
#scaler = preprocessing.MinMaxScaler(feature_range=(0, 10)).fit(features)
#scaled_feature = scaler.transform(features)
#print(scaled_feature)
scaler = StandardScaler()
scaler.fit(features)
#scaler.data_max_
scaled_feature=scaler.transform(features)
#X_test=scaler.transform(X_test)
#print(scaled_feature)

#print(features)
loaded_model = joblib.load(model_file)
#print('model:',loaded_model)
result = loaded_model.predict(scaled_feature)
#print('result:',result)
hasil = pd.DataFrame(result)
print(hasil)
hasil.to_csv('hasil.csv')
#print(label)
